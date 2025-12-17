using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_13
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            LoadData();
        }
        private string connString = "Data Source=DESKTOP-1PASJN5\\SQLEXPRESS01;Initial Catalog=Lab_12;Integrated Security=True;Encrypt=True;TrustServerCertificate=True";

        byte[] imageData;
        private void button_browe_Click(object sender, EventArgs e)
        {
            OpenFileDialog ofd = new OpenFileDialog();
            ofd.Filter = "Image Files|*.jpg;*.png;*.jpeg";

            if(ofd.ShowDialog() == DialogResult.OK)
            {
                pictureBox1.Image = Image.FromFile(ofd.FileName);
                imageData = File.ReadAllBytes(ofd.FileName);
            }

          
        }

        private void button_add_Click(object sender, EventArgs e)
        {
            using(SqlConnection  conn = new SqlConnection(connString))
            {
                string query = "INSERT INTO Products (Name, Price, Description, Photo) VALUES (@name, @price, @des, @photo)";
                
                SqlCommand cmd = new SqlCommand(query,conn);

                cmd.Parameters.Add("@name",SqlDbType.VarChar).Value = txt_name.Text;
                cmd.Parameters.Add("@price", SqlDbType.Decimal).Value = numeric_price.Value;
                cmd.Parameters.Add("@des", SqlDbType.Text).Value = txt_description.Text;
                cmd.Parameters.Add("@photo", SqlDbType.VarBinary).Value = imageData;

                conn.Open();
                cmd.ExecuteNonQuery();
                MessageBox.Show("New product insert successfully ");
                LoadData();
            }
        }

        private void LoadData()
        {
            using (SqlConnection conn = new SqlConnection(connString))
            {
                SqlDataAdapter da = new SqlDataAdapter(
                    "SELECT * FROM Products", conn);

                DataTable dt = new DataTable();
                da.Fill(dt);

                dgv.Columns.Clear();
                dgv.AutoGenerateColumns = false;
                dgv.AllowUserToAddRows = false;   // ⭐ IMPORTANT

                dgv.Columns.Add(new DataGridViewTextBoxColumn()
                {
                    DataPropertyName = "id",
                    HeaderText = "ID"
                });

                dgv.Columns.Add(new DataGridViewTextBoxColumn()
                {
                    DataPropertyName = "name",
                    HeaderText = "Name"
                });

                dgv.Columns.Add(new DataGridViewTextBoxColumn()
                {
                    DataPropertyName = "price",
                    HeaderText = "Price",
                    DefaultCellStyle = new DataGridViewCellStyle()
                    {
                        Format = "C"
                    },
                    
                });
                
                dgv.Columns.Add(new DataGridViewTextBoxColumn()
                {
                    DataPropertyName = "description",
                    HeaderText = "Description"
                });

                DataGridViewImageColumn imgCol = new DataGridViewImageColumn();
                imgCol.HeaderText = "Photo";
                imgCol.ImageLayout = DataGridViewImageCellLayout.Zoom;
                imgCol.DataPropertyName = "photo";

                dgv.Columns.Add(imgCol);

                dgv.DataSource = dt;
            }

        }

    }
}   
