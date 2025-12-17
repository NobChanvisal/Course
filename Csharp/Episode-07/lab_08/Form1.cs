using System;
using System.Collections.Generic;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_08
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button_load_Click(object sender, EventArgs e)
        {
           openFileDialog1.Filter = "Text Files (*.txt)|*.txt|All Files (*.*)|*.*";
            if(openFileDialog1.ShowDialog() == DialogResult.OK)
            {
                textBox.Text = System.IO.File.ReadAllText(openFileDialog1.FileName);
            }
        }

        public void saveText()
        {

        }
        private void button_save_Click(object sender, EventArgs e)
        {
            saveFileDialog1.Filter = "Text Files (*.txt)|*.txt|All Files (*.*)|*.*";
            if(saveFileDialog1.ShowDialog() == DialogResult.OK)
            {
                string fileName = saveFileDialog1.FileName;
                System.IO.File.WriteAllText(fileName, textBox.Text);
            }
        }
    }
}
