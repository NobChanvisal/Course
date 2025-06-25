import datetime
import os

# --- Constants for file names ---
ACCOUNTS_FILE = "accounts.txt"
INVOICES_FILE = "invoices.txt"

# --- Global lists to hold data in memory ---
# Structure: [{'id': 'ACC001', 'name': 'John Doe', 'balance': 1500.0}]
accounts_data = []
# Structure: [{'account_id': 'ACC001', 'type': 'Deposit', 'amount': 500.0, 'timestamp': '2023-10-27 10:30:00'}]
invoices_data = []

# --- Helper Functions for File I/O ---

def load_accounts():
    """
    Loads account data from ACCOUNTS_FILE into the global accounts_data list.
    Handles file not found by creating an empty file.
    """
    # global accounts_data
    accounts_data.clear() # Clear existing data before loading
    try:
        with open(ACCOUNTS_FILE, "r") as file:
            for line in file:
                try:
                    parts = line.strip().split(',')
                    if len(parts) == 3:
                        acc_id, name, balance_str = parts
                        # Ensure balance is stored as a float
                        accounts_data.append({
                            'id': acc_id,
                            'name': name,
                            'balance': float(balance_str)
                        })
                    else:
                        print(f"Skipping malformed account line: {line.strip()}")
                except ValueError as e:
                    print(f"Error parsing account line: {line.strip()} - {e}")
    except FileNotFoundError:
        print(f"'{ACCOUNTS_FILE}' not found. Creating a new one.")
        with open(ACCOUNTS_FILE, "w") as file:
            pass # Create an empty file
    except Exception as e:
        print(f"An unexpected error occurred while loading accounts: {e}")

def save_accounts():
    """
    Saves the current accounts_data list back to ACCOUNTS_FILE, overwriting its content.
    """
    try:
        with open(ACCOUNTS_FILE, "w") as file:
            for acc in accounts_data:
                # Write account details, converting balance back to string
                file.write(f"{acc['id']},{acc['name']},{acc['balance']}\n")
    except Exception as e:
        print(f"Error saving accounts: {e}")

def load_invoices():
    """
    Loads invoice data from INVOICES_FILE into the global invoices_data list.
    Handles file not found by creating an empty file.
    """
    global invoices_data
    invoices_data.clear() # Clear existing data before loading
    try:
        with open(INVOICES_FILE, "r") as file:
            for line in file:
                try:
                    parts = line.strip().split(',')
                    if len(parts) == 4:
                        acc_id, trans_type, amount_str, timestamp = parts
                        # Ensure amount is stored as a float
                        invoices_data.append({
                            'account_id': acc_id,
                            'type': trans_type,
                            'amount': float(amount_str),
                            'timestamp': timestamp
                        })
                    else:
                        print(f"Skipping malformed invoice line: {line.strip()}")
                except ValueError as e:
                    print(f"Error parsing invoice line: {line.strip()} - {e}")
    except FileNotFoundError:
        print(f"'{INVOICES_FILE}' not found. Creating a new one.")
        with open(INVOICES_FILE, "w") as file:
            pass # Create an empty file
    except Exception as e:
        print(f"An unexpected error occurred while loading invoices: {e}")

def save_invoice(invoice_entry):
    """
    Appends a single invoice entry to INVOICES_FILE.
    """
    try:
        with open(INVOICES_FILE, "a") as file:
            # Write invoice details, converting amount back to string
            file.write(f"{invoice_entry['account_id']},{invoice_entry['type']},{invoice_entry['amount']},{invoice_entry['timestamp']}\n")
        invoices_data.append(invoice_entry) # Also add to in-memory list
    except Exception as e:
        print(f"Error saving invoice: {e}")

# --- Core Banking Functions ---

def find_account(account_id):
    """
    Finds an account by ID from the accounts_data list.
    Returns the account dictionary if found, None otherwise.
    """
    for acc in accounts_data:
        if acc['id'] == account_id:
            return acc
    return None

def register_account():
    """
    Admin function: Registers a new bank account.
    Requires a unique ID, name, and an initial balance.
    """
    print("\n--- Register New Account ---")
    while True:
        acc_id = input("Enter new account ID (e.g., ACC001): ").strip().upper()
        if not acc_id:
            print("Account ID cannot be empty.")
            continue
        if find_account(acc_id):
            print("Account ID already exists. Please choose a different one.")
        else:
            break

    name = input("Enter account holder name: ").strip()
    if not name:
        print("Account name cannot be empty. Registration cancelled.")
        return

    while True:
        try:
            initial_balance_str = input("Enter initial balance: ")
            initial_balance = float(initial_balance_str)
            if initial_balance < 0:
                print("Initial balance cannot be negative.")
            else:
                break
        except ValueError:
            print("Invalid amount. Please enter a number.")

    new_account = {'id': acc_id, 'name': name, 'balance': initial_balance}
    accounts_data.append(new_account)
    save_accounts() # Save immediately after adding
    print(f"Account '{name}' ({acc_id}) registered successfully with initial balance ${initial_balance:.2f}!")

def view_all_accounts():
    """
    Admin function: Displays all registered bank accounts.
    """
    print("\n--- All Bank Accounts ---")
    if not accounts_data:
        print("No accounts registered yet.")
        return

    print(f"{'ID':<10}{'Name':<25}{'Balance':<15}")
    print("-" * 50)
    for acc in accounts_data:
        print(f"{acc['id']:<10}{acc['name']:<25}${acc['balance']:<14.2f}")
    print("-" * 50)

def deposit_funds(account_id):
    """
    Deposits funds into a specified account.
    Updates account balance and records the transaction.
    """
    account = find_account(account_id)
    if not account:
        print("Account not found.")
        return

    print(f"\n--- Deposit for Account: {account['id']} ({account['name']}) ---")
    while True:
        try:
            amount_str = input("Enter amount to deposit: ")
            amount = float(amount_str)
            if amount <= 0:
                print("Deposit amount must be positive.")
            else:
                break
        except ValueError:
            print("Invalid amount. Please enter a number.")

    account['balance'] += amount
    timestamp = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    invoice_entry = {
        'account_id': account_id,
        'type': 'Deposit',
        'amount': amount,
        'timestamp': timestamp
    }
    save_invoice(invoice_entry) # Save the transaction
    save_accounts()             # Save updated account balance
    print(f"Successfully deposited ${amount:.2f} into account {account_id}.")
    print(f"New balance: ${account['balance']:.2f}")

def withdraw_funds(account_id):
    """
    Withdraws funds from a specified account.
    Checks for sufficient balance and records the transaction.
    """
    account = find_account(account_id)
    if not account:
        print("Account not found.")
        return

    print(f"\n--- Withdraw from Account: {account['id']} ({account['name']}) ---")
    while True:
        try:
            amount_str = input("Enter amount to withdraw: ")
            amount = float(amount_str)
            if amount <= 0:
                print("Withdrawal amount must be positive.")
            else:
                break
        except ValueError:
            print("Invalid amount. Please enter a number.")

    if account['balance'] < amount:
        print(f"Insufficient funds. Current balance: ${account['balance']:.2f}")
        return

    account['balance'] -= amount
    timestamp = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    invoice_entry = {
        'account_id': account_id,
        'type': 'Withdrawal',
        'amount': amount,
        'timestamp': timestamp
    }
    save_invoice(invoice_entry) # Save the transaction
    save_accounts()             # Save updated account balance
    print(f"Successfully withdrew ${amount:.2f} from account {account_id}.")
    print(f"New balance: ${account['balance']:.2f}")

def view_account_details(account_id):
    """
    Displays details for a single account.
    """
    account = find_account(account_id)
    if not account:
        print("Account not found.")
        return

    print("\n--- Account Details ---")
    print(f"Account ID: {account['id']}")
    print(f"Name:       {account['name']}")
    print(f"Balance:    ${account['balance']:.2f}")
    print("-" * 30)

def view_transactions_for_account(account_id):
    """
    Displays transaction history for a specified account.
    """
    load_invoices() # Ensure latest invoices are loaded
    account = find_account(account_id)
    if not account:
        print("Account not found.")
        return

    print(f"\n--- Transactions for Account: {account['id']} ({account['name']}) ---")
    account_transactions = [
        inv for inv in invoices_data if inv['account_id'] == account_id
    ]

    if not account_transactions:
        print("No transactions found for this account.")
        return

    print(f"{'Timestamp':<20}{'Type':<15}{'Amount':<15}")
    print("-" * 50)
    for inv in account_transactions:
        print(f"{inv['timestamp']:<20}{inv['type']:<15}${inv['amount']:<14.2f}")
    print("-" * 50)

# --- Main Application Loop ---

def main():
    """
    The main function to run the banking application.
    Manages user roles (Admin/User) and their respective menus.
    """
    # Load all data at the start
    load_accounts()
    load_invoices()

    while True:
        print("\n--- Banking System Main Menu ---")
        print("1. Admin Login")
        print("2. User Login")
        print("3. Exit")
        role_choice = input("Enter your choice (1-3): ")

        if role_choice == "1":
            admin_password = input("Enter Admin Password: ")
            if admin_password == "admin123": # Hardcoded password for demonstration
                while True:
                    print("\n--- Admin Menu ---")
                    print("1. Register New Account")
                    print("2. View All Accounts")
                    print("3. View Transactions for an Account") # Admin can view any
                    print("4. Deposit Funds (Any Account)")
                    print("5. Withdraw Funds (Any Account)")
                    print("6. Back to Main Menu")
                    admin_opt = input("Enter option: ")

                    if admin_opt == "1":
                        register_account()
                    elif admin_opt == "2":
                        view_all_accounts()
                    elif admin_opt == "3":
                        acc_id_to_view = input("Enter Account ID to view transactions for: ").strip().upper()
                        view_transactions_for_account(acc_id_to_view)
                    elif admin_opt == "4":
                        acc_id_to_deposit = input("Enter Account ID to deposit into: ").strip().upper()
                        deposit_funds(acc_id_to_deposit)
                    elif admin_opt == "5":
                        acc_id_to_withdraw = input("Enter Account ID to withdraw from: ").strip().upper()
                        withdraw_funds(acc_id_to_withdraw)
                    elif admin_opt == "6":
                        break
                    else:
                        print("Invalid option. Please try again.")
            else:
                print("Incorrect Admin Password.")

        elif role_choice == "2":
            # User Login
            user_account_id = input("Enter your Account ID: ").strip().upper()
            user_account = find_account(user_account_id)
            if user_account:
                print(f"Welcome, {user_account['name']}!")
                while True:
                    print(f"\n--- User Menu for {user_account['name']} ({user_account['id']}) ---")
                    print("1. View My Account Details")
                    print("2. Deposit Funds")
                    print("3. Withdraw Funds")
                    print("4. View My Transactions")
                    print("5. Back to Main Menu")
                    user_opt = input("Enter option: ")

                    if user_opt == "1":
                        view_account_details(user_account_id)
                    elif user_opt == "2":
                        deposit_funds(user_account_id)
                    elif user_opt == "3":
                        withdraw_funds(user_account_id)
                    elif user_opt == "4":
                        view_transactions_for_account(user_account_id)
                    elif user_opt == "5":
                        break
                    else:
                        print("Invalid option. Please try again.")
            else:
                print("Account not found. Please check your Account ID.")

        elif role_choice == "3":
            print("Exiting Banking System. Goodbye!")
            break
        else:
            print("Invalid choice. Please enter 1, 2, or 3.")

# Run the main application
if __name__ == "__main__":
    main()
