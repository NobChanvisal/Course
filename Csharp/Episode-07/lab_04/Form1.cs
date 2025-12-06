using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_04
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            initializeCheckedBoxList();
        }

        public void initializeCheckedBoxList()
        {
            List<string> items = new List<string>
            {
                "Html",
                "Css",
                "Javascript",
                "C++",
                "C#",
                "Python"
            };
            foreach (string item in items)
            {
                chkList_box_fav_program.Items.Add(item);
            }
        }

        private void button_submit_Click(object sender, EventArgs e)
        {
            
            listBox.Items.Clear();
            foreach(string item in chkList_box_fav_program.CheckedItems)
            {
                listBox.Items.Add(item);
            }
        }
    }
}
