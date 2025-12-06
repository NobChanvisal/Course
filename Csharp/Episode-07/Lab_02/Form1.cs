using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Lab_02
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            addCurrencyToCombo_box();

        }

        public void addCurrencyToCombo_box()
        {
            List<String> Currencies = new List<String> { "USD", "RIEL", "YUAN" } ;
            foreach (String Currency in Currencies)
            {
                combo_from.Items.Add(Currency);
                combo_to.Items.Add(Currency);
            }
            combo_from.SelectedIndex = 0;
            combo_to.SelectedIndex = 1;
        }

        public bool IsErrorInput()
        {
            if (combo_from.SelectedIndex == -1 || 
                combo_to.SelectedIndex == -1 || num_amount.Value <= 0)
            {
                MessageBox.Show("Please select currencies and enter a valid amount.");
                return true;
            }

            return false;
        }

        public void ConvertCurrency()
        {
            string from = combo_from.Text;
            string to = combo_to.Text;
            double amount = Convert.ToDouble(num_amount.Value);
            double rate = 0;
            double result = 0;
            Dictionary<string,double> exchangeRate = new Dictionary<string, double>
            {
                {"riel", 4100 },
                {"yuan", 7.08 }

            };
            if(from == to)
            {
                lbl_result.Text = $"Converted : {amount:F2} {to}";
                lbl_rate.Text = "Rate          : Same currency";
                return;
            }
            else if(from == "USD" &&  to == "RIEL")
            {
                rate = exchangeRate["riel"];
                result = amount * rate;

            }
            else if(from == "USD" && to == "YUAN")
            {

                rate = exchangeRate["yuan"];
                result = amount * rate;


            }
            else if(from == "RIEL" && to == "USD")
            {
                rate = exchangeRate["riel"];
                result = amount / rate;
            }
            else if(from == "YUAN" && to == "USD")
            {
                rate = exchangeRate["yuan"];
                result = amount / rate;
            }
            lbl_result.Text = $"Converted : {amount:F2} {from} = {result:F2} {to}";
            lbl_rate.Text = $"Rate          : {rate:F2}";
        }

        private void button_convert_Click(object sender, EventArgs e)
        {
            if(!IsErrorInput())
            {
                ConvertCurrency();
            }
        }

        private void button_clear_Click(object sender, EventArgs e)
        {
            num_amount.Value = 0;
            lbl_result.Text = $"Converted : 0";
            lbl_rate.Text = $"Rate          : 0";
        }
    }
}
