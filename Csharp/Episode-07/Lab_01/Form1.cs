using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Lab_01
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        
        public void clear_txt()
        {
            txt_number1.Text = "";
            txt_number2.Text = "";
            txt_result.Text = "Result = 0";
        }
        
        public Boolean IsEmpty()
        {
            if(txt_number1.Text == "" ||  txt_number2.Text == "")
            {
                MessageBox.Show("Invalid value.");
                return true;
            }
            return false;
        }

        public void calculate(string type)
        {
            double value1 = double.Parse(txt_number1.Text);
            double value2 = double.Parse(txt_number2.Text);
            double result = 0;
            switch (type)
            {
                case "+":
                    result = value1 + value2;   
                    break;
                case "-":
                    result = value1 - value2;
                    break;
                case "*":
                    result = value1 * value2;
                    break;
                case "/":
                    result = value1 / value2;
                    break;
                
            }
            txt_result.Text = $"Result = {result}";
          
        }
        private void button_add_Click(object sender, EventArgs e)
        {
            if (!IsEmpty()) calculate("+");
        }

        private void button_minus_Click(object sender, EventArgs e)
        {
            if (!IsEmpty()) calculate("-");
        }

        private void button_mul_Click(object sender, EventArgs e)
        {
            if (!IsEmpty()) calculate("*");
        }

        private void button_divis_Click(object sender, EventArgs e)
        {
            if (!IsEmpty()) calculate("/");
        }

        private void button_clear_Click(object sender, EventArgs e)
        {
            clear_txt();
        }
    }
}
