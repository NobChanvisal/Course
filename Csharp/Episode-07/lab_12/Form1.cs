using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_12
{
    public partial class Form1 : Form
    {

        //note
        //SelectionMode = FullRowSelect
        //MultiSelect = False
        //ReadOnly = True
        //AutoSizeColumnMode = fill
        //RowHeaderVisible = False
        //SelectionMode = fullRow select
        public Form1()
        {
            InitializeComponent();
            loadData();
            //lock size user can't resize
            this.MinimumSize = this.Size;
            this.MaximumSize = this.Size;
        }

        private string connString = "Data Source=DESKTOP-1PASJN5\\SQLEXPRESS01;Initial Catalog=Lab_12;Integrated Security=True;Encrypt=True;TrustServerCertificate=True";
        
        private void clearForm()
        {
            txtName.Text = "";
            txt_addr.Text = "";
            radio_Female.Checked = false;
            radio_Male.Checked = false;
            numericScore.Value = 0;
        }
        string gender = "";
        private bool isEmpty()
        {
         
                if(txtName.Text == "" || txt_addr.Text == "" || gender == "")
                {
                     MessageBox.Show("Invalid data.");
                    return true;
                }

                return false;
        }

        private void button_save_Click(object sender, EventArgs e)
        {
            if(radio_Female.Checked )
            {
                gender = radio_Female.Text;
            }
            else
            {
                gender = radio_Male.Text;
            }

            if(isEmpty()) { return; }

            string Query = "INSERT INTO students (name, gender, score, address) VALUES (@name, @gender, @score, @address)";
            using (SqlConnection conn = new SqlConnection(connString))
            {
                using(SqlCommand cmd = new SqlCommand(Query,conn))
                {
                    cmd.Parameters.Add("@name", SqlDbType.VarChar, 200).Value = txtName.Text;
                    cmd.Parameters.Add("@gender", SqlDbType.VarChar, 20).Value = gender;
                    cmd.Parameters.Add("@score", SqlDbType.Decimal).Value = numericScore.Value;
                    cmd.Parameters.Add("@address", SqlDbType.Text).Value = txt_addr.Text;
                    conn.Open();
                    cmd.ExecuteNonQuery();

                    MessageBox.Show("Data insert successfully !");  
                }
            }

            loadData();
            clearForm();

        }

        public void loadData()
        {
            

            using (SqlConnection conn = new SqlConnection(connString))
            {
                string query = "SELECT * FROM students";
                using(SqlDataAdapter da = new SqlDataAdapter(query, conn))
                {
                    DataTable dt = new DataTable();
                    da.Fill(dt);
                    dgv.DataSource = dt;
                }
            }
        }

        private void button_update_Click(object sender, EventArgs e)
        {
            if(dgv.SelectedRows.Count == 0)
            {
                MessageBox.Show("Please select row to update.");
                return;
            }
            int id = Convert.ToInt32(dgv.SelectedRows[0].Cells["id"].Value);

            string gender = radio_Male.Checked ? "Malle" : "Female";
            if (isEmpty()) { return; }

            using (SqlConnection conn = new SqlConnection(connString))
            {
                string query = "UPDATE students SET name = @name, gender = @gender, score = @score, address = @address WHERE id = @id";
                using (SqlCommand cmd = new SqlCommand(query, conn))
                {
                    cmd.Parameters.Add("@name", SqlDbType.VarChar,200).Value = txtName.Text;
                    cmd.Parameters.Add("@gender", SqlDbType.VarChar, 20).Value = gender;
                    cmd.Parameters.Add("@score", SqlDbType.Decimal).Value = numericScore.Value;
                    cmd.Parameters.Add("@address", SqlDbType.Text).Value = txt_addr.Text;
                    cmd.Parameters.Add("@id", SqlDbType.Int).Value = id;

                    conn.Open();
                    cmd.ExecuteNonQuery();
                }
            }
            loadData();
        }

        

        private void dgv_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            if (e.RowIndex >= 0)
            {
                DataGridViewRow row = dgv.Rows[e.RowIndex];

                txtName.Text = row.Cells["name"].Value.ToString();
                txt_addr.Text = row.Cells["address"].Value.ToString();
                numericScore.Value = row.Cells["score"].Value != DBNull.Value ? Convert.ToDecimal(row.Cells["score"].Value) : 0;

                string gender = row.Cells["gender"].Value.ToString();

                if (gender == "Male") radio_Male.Checked = true;
                else radio_Female.Checked = true;
            }
        }

        private void button_clear_Click(object sender, EventArgs e)
        {
            clearForm();
        }

        private void button_delete_Click(object sender, EventArgs e)
        {
            if(dgv.SelectedRows.Count == 0)
            {
                MessageBox.Show("Please select row to update.");
                return;
            }

            int id = Convert.ToInt32(dgv.SelectedRows[0].Cells["id"].Value);

            switch(MessageBox.Show("Are you sure to delete ?", "Confirm", MessageBoxButtons.YesNo))
            {
                case DialogResult.Yes:
                    using(SqlConnection conn = new SqlConnection(connString))
                    {
                        string quary = "DELETE FROM students WHERE id = @id";
                        using(SqlCommand cmd = new SqlCommand(quary,conn))
                        {
                            cmd.Parameters.Add("@id",SqlDbType.Int).Value = id;
                            conn.Open();
                            cmd.ExecuteNonQuery();
                        }
                    }
                    MessageBox.Show("Deleted successfully !");
                    loadData();
                    break;
                case DialogResult.No:
                    break;
            }
        }
    }
}
