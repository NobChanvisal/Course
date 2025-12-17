using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_11
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private Label CreateLabel(string text)
        {
            return new Label
            {
                Text = text,
                AutoSize = true,
                Padding = new Padding(5)
            };
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            if(Form1.listInvoice.Count > 0)
            {
                tableLayoutPanel1.Visible = true;
                tableLayoutPanel1.Controls.Clear();
                tableLayoutPanel1.RowStyles.Clear();

                int row = 0;

                // Header
                tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Absolute, 35));

                tableLayoutPanel1.RowCount++;
                tableLayoutPanel1.Controls.Add(CreateLabel("Invoice ID"), 0, row);
                tableLayoutPanel1.Controls.Add(CreateLabel("Date"), 1, row);
                tableLayoutPanel1.Controls.Add(CreateLabel("Total"), 2, row);
                tableLayoutPanel1.Controls.Add(CreateLabel("Products"), 3, row);
                row++;

                foreach (var item in Form1.listInvoice)
                {
                    tableLayoutPanel1.RowCount++;
                    tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.AutoSize));

                    tableLayoutPanel1.Controls.Add(CreateLabel(item.id.ToString()), 0, row);
                    tableLayoutPanel1.Controls.Add(CreateLabel(item.date.ToString("dd/MM/yyyy hh:mm")), 1, row);
                    tableLayoutPanel1.Controls.Add(CreateLabel("$" + item.totalAmount.ToString("F2")), 2, row);

                    // Products column
                    string products = "";
                    foreach (var pro in item.data)
                    {
                        products += $"{pro.name} ${pro.price} - (x{pro.qty})\n";
                    }

                    tableLayoutPanel1.Controls.Add(CreateLabel(products), 3, row);

                    row++;
                }
            }
        }

    }
}
    