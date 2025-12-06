using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Lab_03
{
    public partial class Form1 : Form
    {
        class Product
        {
            public int Id { get; set; }
            public string Name { get; set; }
            public double Price { get; set; }
            public string Category { get; set; }
            public string Colors { get; set; }

            //public Product(int Id,  string Name, double Price, string Category)
            //{
            //    this.Id = Id;
            //    this.Name = Name;
            //    this.Price = Price;
            //    this.Category = Category;
            //}
            public string displayProduct()
            {
                return $"{Id} - {Name} - {Price:F2}$ - {Category} - {Colors}";
            }
        }
        public Form1()
        {
            InitializeComponent();
            addCategory();
        }


        public void addCategory()
        {
            List<String> categories = new List<String>
            {
                "Men",
                "Women",
                "Kid",
                "Accessories"
            };

            foreach(String category in categories)
            {
                cb_category.Items.Add(category);
            }
        }

        private void button_add_Click(object sender, EventArgs e)
        {

            int id = int.Parse(txt_Id.Text);
            string name = txt_name.Text;
            double price = Convert.ToDouble(num_price.Value);
            string category = cb_category.Text;
            string color = "";

            if(radio_blue.Checked ) { color = "blue"; }
            else if(radio_red.Checked ) { color = "red"; }
            else if(radio_none.Checked) { color = "none"; }
         
            

            Product product = new Product()
            {

                Id = id,
                Name = name,
                Price = price,
                Category = category,
                Colors = color
            };

            //MessageBox.Show(product.displayProduct());

            listBox_student_list.Items.Add(product.displayProduct());
            string total = listBox_student_list.Items.Count.ToString();
            lbl_count.Text = $"Total product : {total}";
        }
    }
}
