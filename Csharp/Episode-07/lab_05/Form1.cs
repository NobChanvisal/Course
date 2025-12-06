using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_05
{
    public partial class Form1 : Form
    {
        public class OrderItem
        {
            public string Name { get; set; }
            public double Price { get; set; }
            public int Quantity { get; set; }
            public double ItemTotal => Price * Quantity;
        }

        public static List<OrderItem> ShoppingCart = new List<OrderItem>();

        public static string cusName;
        public static string address;
        public static string phone;

        public Form1()  
        {
            InitializeComponent();
            ShoppingCart.Clear();
            initItemsToCb_products();
        }

        public void initItemsToCb_products()
        {
            List<string> _products = new List<string>
            {
                "T-shirt",
                "Jean",
                "Shoes",
                "Jacket"
            };
            foreach (string item in _products)
            {
                cbBox_product.Items.Add(item);
            }
            cbBox_product.SelectedIndex = 0;
        }

        public Dictionary<string, double> productPrice = new Dictionary<string, double>
            {
                {"T-shirt", 10},
                { "Jean",15.5},
                {"Shoes", 11.99},
                {"Jacket",24.5 }
            };
        public double total()
        {
            double proprice = productPrice[cbBox_product.SelectedItem.ToString()];
            double qty = Convert.ToDouble(num_qty.Value);
            return proprice * qty;
        }
     

        private void cbBox_product_SelectedIndexChanged(object sender, EventArgs e)
        {
            if(cbBox_product.SelectedItem != null)
            {
                string key = cbBox_product.SelectedItem.ToString();
                lbl_show_price.Text = "$ " + productPrice[key].ToString();
                lbl_show_total.Text = $"$ {total():F2}";

            }
        }

        private void num_qty_ValueChanged(object sender, EventArgs e)
        {
            
            if(num_qty.Value > 0)
            {
                lbl_show_total.Text = $"$ {total():F2}";
            }
        }

        private void button_add_to_cart_Click(object sender, EventArgs e)
        {
            string name = cbBox_product.SelectedItem.ToString();
            string key = cbBox_product.SelectedItem.ToString();
            double price = productPrice[key];
            int qty = Convert.ToInt32(num_qty.Value);

            OrderItem item = new OrderItem
            {
                Name = name,
                Price = price,
                Quantity = qty,
            };

            ShoppingCart.Add(item);
            MessageBox.Show($"{name}  x{qty} added to cart!", "Item Added", MessageBoxButtons.OK, MessageBoxIcon.Information);
            updateCartItems();
            num_qty.Value = 1;
        }

        public void updateCartItems()
        {
            listBox_shoppingCart.Items.Clear();
            double currentTotal = 0.0;
            foreach (var item in ShoppingCart)
            {
                string display = $"{item.Name}(x{item.Quantity}) | ${item.Price:F2} = ${item.ItemTotal:F2}";
                listBox_shoppingCart.Items.Add(display);
                currentTotal += item.ItemTotal;
            }
            lbl_cart_subTotal.Text = $"${currentTotal:F2}";
        }

        private void button_remove_Click(object sender, EventArgs e)
        {
            int selectIndex = listBox_shoppingCart.SelectedIndex;
            if (selectIndex < 0)
            {
                MessageBox.Show("Please select an item from the cart list to remove.", "Error", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                return;
            }
            if(selectIndex < ShoppingCart.Count)
            {
                ShoppingCart.RemoveAt(selectIndex);
                updateCartItems();
                MessageBox.Show("Item remove success.");
            }
        }

        private void button_clear_Click(object sender, EventArgs e)
        {
            ShoppingCart.Clear();
            updateCartItems();
        }

        private void button_checkOut_Click(object sender, EventArgs e)
        {
            cusName = txt_name.Text;
            address = txtAddr.Text;
            phone = txtPhone.Text;
            if(cusName == "" || address == "" || phone == "")
            {
                MessageBox.Show("Please enter delivery inform.");
                return;
            }
            else if(ShoppingCart.Count == 0)
            {
                MessageBox.Show("Please add product to shopping cart.");
            }
            else
            {
                
                this.Hide();
                Form2 f2 = new Form2();
                f2.Show();

            }
        }

        private void Form1_FormClosing(object sender, FormClosingEventArgs e)
        {
            Application.Exit();
        }
    }
}
