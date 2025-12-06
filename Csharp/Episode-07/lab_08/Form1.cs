using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;

namespace lab_08
{
    public partial class Form1 : Form
    {
        Form2 f2;

        public Form1()
        {
            InitializeComponent();
            f2 = new Form2(this); // send Form1 instance to Form2
        }

     

        private void btnShowForm2_Click_1(object sender, EventArgs e)
        {
            this.Hide();
            f2.Show();
        }
    }
}
