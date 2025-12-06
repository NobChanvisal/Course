using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_08
{
    public partial class Form2 : Form
    {
        Form1 mainForm;

        public Form2(Form1 frm1)
        {
            InitializeComponent();
            mainForm = frm1;     // stored reference to Form1
        }

        
        private void btnBack_Click_1(object sender, EventArgs e)
        {
            this.Hide();
            mainForm.Show();
        }
    }
}
