using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace _01
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        public bool userNameValidation()
        {
            if (String.IsNullOrEmpty(txt_username.Text))
            {
                txt_username.Focus();
                errorProvider1.SetError(txt_username, "Please enter username");
                return false;
            }
            else
            {
                errorProvider1.Clear();
                return true;
            }
        }

        public bool ageValidation()
        {
            if (String.IsNullOrEmpty(txt_age.Text))
            {
                txt_age.Focus();
                errorProvider2.SetError(txt_age, "Please enter age");
                return false;
            }
            else if(int.Parse(txt_age.Text) < 18)
            {
                txt_age.Focus();
                errorProvider2.SetError(txt_age, "Age must be > 18");
                return false;
            }
            else
            {
                errorProvider2.Clear();
                return true;
            }
        }

        private void button_submit_Click(object sender, EventArgs e)
        {
            if(userNameValidation() && ageValidation())
            {
                MessageBox.Show($"Name : {txt_username.Text} - Age : {txt_age.Text}");
            }
            else
            {
                MessageBox.Show("Invalid value . ");
            }
        }
    }
}
