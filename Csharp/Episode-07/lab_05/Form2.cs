using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_05
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
          loadTable();
            
        }

        public void loadTable()
        {
            tablePanel.Controls.Clear();
            tablePanel.RowStyles.Clear();
            tablePanel.RowCount = 0;

            tablePanel.RowStyles.Add(new RowStyle(SizeType.Absolute, 35));

            //header
            tablePanel.Controls.Add(customLableHeader("Name"), 0,0);
            tablePanel.Controls.Add(customLableHeader("Price"), 1,0);
            tablePanel.Controls.Add(customLableHeader("Qty"), 2, 0);
            tablePanel.Controls.Add(customLableHeader("Total"), 3, 0);

            int rowIndex = 1;
            foreach(var item in Form1.ShoppingCart)
            {

                tablePanel.RowCount++;
                tablePanel.RowStyles.Add(new RowStyle(SizeType.Absolute, 30));
                tablePanel.Controls.Add(customLabelCell(item.Name), 0, rowIndex);
                tablePanel.Controls.Add(customLabelCell(item.Price.ToString("F2")), 1, rowIndex);
                tablePanel.Controls.Add(customLabelCell(item.Quantity.ToString()), 2, rowIndex);
                tablePanel.Controls.Add(customLabelCell(item.ItemTotal.ToString("F2")), 3, rowIndex);


                rowIndex++;
            }


        }
        private void Form2_Load(object sender, EventArgs e)
        {

            lbl_name.Text = Form1.cusName;  
            lbl_phone.Text = Form1.phone;
            lbl_addr.Text = Form1.address;
            double amount = 0;
            
            
            foreach(var item in Form1.ShoppingCart)
            {
                amount = amount + item.ItemTotal;
            }
            lbl_show_amount.Text = $"$ {amount}";

            DateTime localDate = DateTime.Now;
            txt_date.Text = localDate.ToString("MM/dd/yyyy h:mm tt");
        }

        private void button_back_Click(object sender, EventArgs e)
        {
            Form1 f1 = new Form1();
            f1.Show();
            this.Hide();
        }

        public Label customLableHeader(string text)
        {
            return new Label()
            {
                Text = text,
                TextAlign = ContentAlignment.MiddleCenter,
                Margin = new Padding(0),
                AutoSize = false,
                Dock = DockStyle.Fill,
                Font = new Font("Segoe UI", 9, FontStyle.Bold),
                BackColor = Color.Gainsboro,
            };
        }

        public Label customLabelCell(string text)
        {
            return new Label()
            {
                Text = text,
                TextAlign = ContentAlignment.MiddleLeft,
                Margin = new Padding(3),
                AutoSize = false,
                Dock = DockStyle.Fill,
            };
        }

        private void Form2_FormClosing(object sender, FormClosingEventArgs e)
        {
            Application.Exit();
        }
    }
}
