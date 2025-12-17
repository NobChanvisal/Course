using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Xml.Linq;

namespace lab_10
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            ProductList(products);
        }
        public class Product
        {
             
            public string id { get; set; }  
            public string name { get; set; }    
            public double price { get; set; }
            public Image Image { get; set; }
        };
        public event EventHandler CardClicked;


        private List<Product> products = new List<Product>
        {
            new Product { id = Guid.NewGuid().ToString("N"), name = "Product 1",price = 1.25, Image = Properties.Resources._01},
            new Product { id = Guid.NewGuid().ToString("N"),name = "Product 2",price = 1, Image = Properties.Resources._02},
            new Product { id = Guid.NewGuid().ToString("N"),name = "Product 3",price = 1, Image = Properties.Resources._03},
            new Product { id = Guid.NewGuid().ToString("N"),name = "Product 4",price = 1.25, Image = Properties.Resources._04},
            new Product { id = Guid.NewGuid().ToString("N"),name = "Product 5",price = 10, Image = Properties.Resources._05},
            new Product { id = Guid.NewGuid().ToString("N"),name = "Product 6",price = 1.45, Image = Properties.Resources._06},

        };
        private List<Product> shoppingCard = new List<Product>();
        private string name;

        public void ProductList(List<Product> products)
        {
            foreach (Product product in products)
            {
                flowLayoutPanel1.Controls.Add(ProductCard(product.id, product.name, product.price,product.Image));
            }
        }
        private Panel ProductCard(string _id,string _name, double _price, Image _image)
        {
            Panel card = new Panel()
            {
                Name = "card",
                Size = new System.Drawing.Size(100, 160),
                BackColor = Color.White,
                BorderStyle = BorderStyle.FixedSingle,
                Cursor = Cursors.Hand
            };
            card.Controls.Add(
                     new PictureBox()
                     {
                         Image = _image,
                         Size = new System.Drawing.Size(100, 100),
                         SizeMode = PictureBoxSizeMode.StretchImage
                     });
            card.Controls.Add(
                new Label()
                {
                    Text = _name,
                    Location = new System.Drawing.Point(5, 110)
                });
            card.Controls.Add(
                    new Label()
                    {
                        Text = "$" + _price.ToString("F2"),
                        Location = new System.Drawing.Point(5, 135)
                    });


            EventHandler clickHandle = (sender, e) =>
            {
                MessageBox.Show($"id = {_id}\n name = {_name}");
                shoppingCard.Add(new Product()
                {
                    id = _id,
                    name = _name,
                    price = _price,
                    Image = _image,
                });
            };
            card.Click += clickHandle;
           
            foreach(Control c in card.Controls)
            {
                c.Click += clickHandle;
            }
            return card;
        }

        private void button_showCart_Click(object sender, EventArgs e)
        {
            string display = "";
           foreach(var pro in shoppingCard)
            {
                display += $"id = {pro.id}, name = {pro.name}, price = {pro.price}\n";
                
            }
            MessageBox.Show(display);
        }
    }
}
