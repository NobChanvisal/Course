using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        public void calculate(double value, double value2, string type)
        {
            double result = 0;
            switch (type)
            {
                case "+": 
                    result = value + value2;
                    break;
                case "-":
                    result = value - value2;
                    break;
                case "*":
                    result = value * value2; 
                    break;
                case "/":
                    result = value * value2; 
                    break;
            }
            label_result.Text = $"Result = {result}";
        }

        public Boolean Empty(string data1, string data2)
        {
            if(data1 == "" || data2 == "")
            {
                MessageBox.Show("invalid value. please enter");
                return true;
            }
            return false;
        }

        private void button_add_Click(object sender, EventArgs e)
        {
            if (!Empty(txt_number1.Text,txt_number2.Text))
            {
                calculate(double.Parse(txt_number1.Text), double.Parse(txt_number1.Text), "+");
            }
        }

        
    }
}
