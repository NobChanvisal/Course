using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Xml.Linq;

namespace _02
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button_register_Click(object sender, EventArgs e)
        {
            if(userName_validate() && email_validate() && password_validate())
            {
                MessageBox.Show("Register successfull.");
            }
            else
            {
                MessageBox.Show("Register fails.");
            }
        }

        public bool userName_validate()
        {
            if (string.IsNullOrWhiteSpace(txt_username.Text) || txt_username.Text.Length < 2)
            {
                errorProvider1.SetError(txt_username, "Name is required and must be at least 2 characters long.");
                return false;
            }
            errorProvider1.SetError(txt_username, ""); // Clear error
            return true;
        }
        public bool email_validate()
        {
            if(string.IsNullOrWhiteSpace(txt_email.Text) || !txt_email.Text.Contains("@"))
            {
                errorProvider2.SetError(txt_email, "Email is required and must contain '@'.");
                return false;
            }
            errorProvider2.SetError(txt_email, ""); // Clear error
            return true;
        }
        public bool password_validate()
        {
            if (string.IsNullOrWhiteSpace(txt_password.Text))
            {
                errorProvider3.SetError(txt_password, "Password is required.");
                return false;
            }
            if(txt_password.Text.Length < 8)
            {
                errorProvider3.SetError(txt_password, "Password must be at least 8 characters long.");
                return false;
            }
            if (!Regex.IsMatch(txt_password.Text, @"[a-z]"))
            {
                errorProvider3.SetError(txt_password, "Password must contain at least one lowercase letter.");
                return false;
            }
            if(!Regex.IsMatch(txt_password.Text, @"[A-Z]"))
            {
                errorProvider3.SetError(txt_password, "Password must contain at least one uppercase letter.");
                return false;
            }
            if (!Regex.IsMatch(txt_password.Text, @"\d"))
            {
                errorProvider3.SetError(txt_password, "Password must contain at least one digit.");
                return false;
            }
            if (!Regex.IsMatch(txt_password.Text, @"[!@#$%^&*]"))
            {
                errorProvider3.SetError(txt_password, "Password must contain at least one special character (!@#$%^&*).");
                return false;
            }
            errorProvider3.SetError(txt_password, "");
            return true;
        }

        private void chk_box_show_pw_CheckedChanged(object sender, EventArgs e)
        {
            
            if (chk_box_show_pw.Checked)
            {
                txt_password.UseSystemPasswordChar = false;    
            }
            else
            {
                txt_password.UseSystemPasswordChar = true;
            }
        }
    }
}
