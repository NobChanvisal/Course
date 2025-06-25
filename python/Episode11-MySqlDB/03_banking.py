
import mysql
import mysql.connector
import Dbconnect

conn = Dbconnect.conn
cursor = conn.cursor()


def create_account(account_no, name, dob, address, mobile_no, opening_balance):
    if conn:
        try:
            cursor = conn.cursor()
            sql = "INSERT INTO accounts (account_no, name, dob, address, mobile_no, balance) VALUES (%s, %s, %s, %s, %s, %s)"
            values = (account_no, name, dob, address, mobile_no, opening_balance)
            cursor.execute(sql, values)
            conn.commit()
            print("Congratulations! Account opened successfully.")
        except mysql.connector.Error as err:
            print(f"Error opening account: {err}")
        finally:
            if conn.is_connected():
                cursor.close()
                conn.close()

def deposit_amount(account_no, amount):

    if conn:
        try:
            cursor = conn.cursor()
            # First, check if account exists and get current balance
            cursor.execute("SELECT balance FROM accounts WHERE account_no = %s", (account_no,))
            result = cursor.fetchone()

            if result:
                current_balance = result[0]
                new_balance = current_balance + amount
                
                # Update account balance in the accounts table
                sql_update_account = "UPDATE accounts SET balance = %s WHERE account_no = %s"
                cursor.execute(sql_update_account, (new_balance, account_no))
                
                # Insert transaction record into the invoice table
                sql_insert_invoice = "INSERT INTO invoice (account_no, transaction_type, amount) VALUES (%s, %s, %s)"
                cursor.execute(sql_insert_invoice, (account_no, 'deposit', amount))
                
                conn.commit()
                print("Amount deposited successfully and transaction recorded.")
            else:
                print("Account not found.")
        except mysql.connector.Error as err:
            print(f"Error depositing amount or recording transaction: {err}")
            conn.rollback() # Rollback changes if an error occurs
        finally:
            if conn.is_connected():
                cursor.close()
                conn.close()

def withdraw_amount(account_no, amount):
    if conn:
        try:
            cursor = conn.cursor()
            # First, check if account exists and get current balance
            cursor.execute("SELECT balance FROM accounts WHERE account_no = %s", (account_no,))
            result = cursor.fetchone()

            if result:
                current_balance = result[0]
                if current_balance >= amount:
                    new_balance = current_balance - amount
                    
                    # Update account balance in the accounts table
                    sql_update_account = "UPDATE accounts SET balance = %s WHERE account_no = %s"
                    cursor.execute(sql_update_account, (new_balance, account_no))
                    
                    # Insert transaction record into the invoice table
                    sql_insert_invoice = "INSERT INTO invoice (account_no, transaction_type, amount) VALUES (%s, %s, %s)"
                    cursor.execute(sql_insert_invoice, (account_no, 'withdraw', amount))
                    
                    conn.commit()
                    print("Amount withdrawn successfully and transaction recorded.")
                else:
                    print("Insufficient balance.")
            else:
                print("Account not found.")
        except mysql.connector.Error as err:
            print(f"Error withdrawing amount or recording transaction: {err}")
            conn.rollback() # Rollback changes if an error occurs
        finally:
            if conn.is_connected():
                cursor.close()
                conn.close()

def balance_enquiry(account_no):
    if conn:
        try:
            cursor = conn.cursor()
            sql = "SELECT balance FROM accounts WHERE account_no = %s"
            cursor.execute(sql, (account_no,))
            result = cursor.fetchone()
            if result:
                print(f"Current Balance is RS {result[0]}")
            else:
                print("Account not found.")
        except mysql.connector.Error as err:
            print(f"Error fetching balance: {err}")
        finally:
            if conn.is_connected():
                cursor.close()
                conn.close()

def account_detail(account_no):
    if conn:
        try:
            cursor = conn.cursor()
            sql = "SELECT account_no, name, dob, address, mobile_no, balance FROM accounts WHERE account_no = %s"
            cursor.execute(sql, (account_no,))
            result = cursor.fetchone()
            if result:
                # Format and print details
                print("******************DETAILS*******************")
                print(f"{result[0]}  |  {result[1]}  |  {result[2]}  |  {result[3]}  | {result[4]} |  {result[5]}  |")
            else:
                print("Account not found.")
        except mysql.connector.Error as err:
            print(f"Error fetching account details: {err}")
        finally:
            if conn.is_connected():
                cursor.close()
                conn.close()

def close_account(account_no):
    if conn:
        try:
            cursor = conn.cursor()
            sql = "DELETE FROM accounts WHERE account_no = %s"
            cursor.execute(sql, (account_no,))
            conn.commit()
            if cursor.rowcount > 0:
                print(".......Account Deleted Successfully.........")
            else:
                print("Account not found.")
        except mysql.connector.Error as err:
            print(f"Error closing account: {err}")
        finally:
            if conn.is_connected():
                cursor.close()
                conn.close()

# --- Main Menu and Application Loop ---

def main_menu():
    print("-------------------------------------------")
    print("            1.OPEN NEW ACCOUNT")
    print("            2.DEPOSIT AMOUNT")
    print("            3.WITHDRAW AMOUNT")
    print("            4.BALANCE ENQUIRY")
    print("            5.ACCOUNT DETAIL")
    print("            6.CLOSE ACCOUNT")
    print("            7.EXIT")
    print("-------------------------------------------")

def run_application():
    while True:
        main_menu()
        choice = input("Enter Option :  >>> ")

        if choice == '1':
            print("*************OPEN NEW ACCOUNT*************")
            acc_no = input("Enter Account No.:- ")
            name = input("Enter Name :- ")
            dob = input("Enter Date of Birth (YYYY-MM-DD) :- ")
            address = input("Enter Address :- ")
            mobile = input("Enter Mobile No.:- ")
            opening_bal = float(input("Enter Opening Balance :- "))
            create_account(acc_no, name, dob, address, mobile, opening_bal)
        elif choice == '2':
            print("-------------------------")
            print("DEPOSIT AMOUNT")
            print("-------------------------")
            
            amount = float(input("Enter Amount :- "))
            acc_no = input("Enter Account No :- ")
            deposit_amount(acc_no, amount)
        elif choice == '3':
            print("-------------------------")
            print("WITHDRAW AMOUNT")
            print("-------------------------")
            amount = float(input("Enter Withdraw Amount :- "))
            acc_no = input("Enter Account No :- ")
            withdraw_amount(acc_no, amount)
        elif choice == '4':
            print("-------------------------")
            print("BALANCE ENQUIRY")
            print("-------------------------")
            
            acc_no = input("Enter Account No :- ")
            balance_enquiry(acc_no)
        elif choice == '5':
            print("-------------------------")
            print("CHECK ACCOUNT DETAILS")
            print("-------------------------")
            acc_no = input("Enter Account No :- ")
            account_detail(acc_no)
        elif choice == '6':
            print("-------------------------")
            print("CLOSE ACCOUNT")
            print("-------------------------")
            acc_no = input("Enter Account No :- ")
            close_account(acc_no)
        elif choice == '7':
            print("Exiting Bank Management System. Goodbye!")
            break
        else:
            print("Invalid choice. Please try again.")
        print("\n" + "="*50 + "\n") # Separator for clarity

if __name__ == "__main__":
    run_application()