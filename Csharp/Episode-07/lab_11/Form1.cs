using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_11
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            ProductList(products);
            loadTable();
        }
        public class Product
        {

            public string id { get; set; }
            public string name { get; set; }
            public double price { get; set; }
            public int qty { get; set; }
          
            public Image Image { get; set; }
        };
        public class Invoice
        {
            public int id { get; set; }
            public List<Product> data = new List<Product>();
            public double totalAmount { get; set; }
            public DateTime date { get; set; }
        }

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
        public List<Product> shoppingCard = new List<Product>();
        private string name;

        public void ProductList(List<Product> products)
        {
            foreach (Product product in products)
            {
                flowLayoutPanel1.Controls.Add(ProductCard(product.id, product.name, product.price, product.Image));
            }
        }
        private Panel ProductCard(string _id, string _name, double _price, Image _image)
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
                //MessageBox.Show($"id = {_id}\n name = {_name}");
                
                var existItem = shoppingCard.Find(pro => pro.id  == _id);
                if (existItem != null)
                {
                    existItem.qty += 1;
                }
                else
                {
                    shoppingCard.Add(new Product()
                    {
                        id = _id,
                        name = _name,
                        price = _price,
                        qty = 1,
                        Image = _image,
                    }) ;
                }

                loadTable();
                lbl_totalValue.Text = $"$ {totalAmount().ToString("F2")}";
            };
            card.Click += clickHandle;

            foreach (Control c in card.Controls)
            {
                c.Click += clickHandle;
            }
            return card;
        }

        public double totalAmount()
        {
            double total = 0;
            foreach(var item in shoppingCard)
            {
                total += item.price * item.qty;
            }
            return total;
        }

        //shopping cart
        public void loadTable()
        {
            tablePanel.Controls.Clear();
            tablePanel.RowStyles.Clear();
            tablePanel.RowCount = 0;

            tablePanel.RowStyles.Add(new RowStyle(SizeType.Absolute, 35));

            //header
            tablePanel.Controls.Add(customLabelHeader("Image"), 0, 0);
            tablePanel.Controls.Add(customLabelHeader("Name"), 1, 0);
            tablePanel.Controls.Add(customLabelHeader("Qty"), 2, 0);
            tablePanel.Controls.Add(customLabelHeader("Price"), 3, 0);
            tablePanel.Controls.Add(customLabelHeader("Total"), 4, 0);

            int rowIndex = 1;
            foreach (var item in shoppingCard)
            {

                double total = item.price * item.qty;
                tablePanel.RowCount++;
                tablePanel.RowStyles.Add(new RowStyle(SizeType.Absolute, 30));
                tablePanel.Controls.Add(customerPictureCell(item.Image), 0, rowIndex);
                tablePanel.Controls.Add(customLabelCell(item.name), 1, rowIndex);
                tablePanel.Controls.Add(customLabelCell(item.qty.ToString()), 2, rowIndex);
                tablePanel.Controls.Add(customLabelCell("$" + item.price.ToString("F2")), 3, rowIndex);
                tablePanel.Controls.Add(customLabelCell("$" + total.ToString("F2")), 4, rowIndex);
                rowIndex++;
            }


        }
        
        public Label customLabelHeader(string text)
        {
            return new Label()
            {
                Text = text,
                TextAlign = ContentAlignment.MiddleCenter,
                Margin = new Padding(0),
                AutoSize = false,
                Dock = DockStyle.Fill,
                Font = new Font("Segoe UI", 6, FontStyle.Bold),
                BackColor = Color.Gainsboro,
            };
        }

        public PictureBox customerPictureCell(Image image)
        {
            return new PictureBox()
            {
                Image = image,
                Size = new System.Drawing.Size(50, 50),
                SizeMode = PictureBoxSizeMode.StretchImage
            };
        }
        public Label customLabelCell(string text)
        {
            return new Label()
            {
                Text = text,
                TextAlign = ContentAlignment.MiddleLeft,
                Margin = new Padding(3),
                Font = new Font("Segoe UI", 7, FontStyle.Regular),
                AutoSize = false,
                Dock = DockStyle.Fill,
            };
        }

        public static List<Invoice> listInvoice = new List<Invoice>();
        private void button_purchase_Click(object sender, EventArgs e)
        {

            Invoice inv = new Invoice
            {
                id = listInvoice.Count + 1,
                totalAmount = totalAmount(),
                date = DateTime.Now
            };

            inv.data.AddRange(shoppingCard);
            listInvoice.Add(inv);
            shoppingCard.Clear();
            loadTable();
            MessageBox.Show("Product list have been add to invoice.", "Message");
        }   
    }
}
