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
    public partial class MDIParent1 : Form
    {
        private int childFormNumber = 0;

        public MDIParent1()
        {   
            InitializeComponent();
            this.MinimumSize = this.Size;
            this.MaximumSize = this.Size;
        }

        private void ShowNewForm(object sender, EventArgs e)
        {
            Form childForm = new Form();
            childForm.MdiParent = this;
            childForm.Text = "Window " + childFormNumber++;
            childForm.Show();
        }

        private void OpenFile(object sender, EventArgs e)
        {
            OpenFileDialog openFileDialog = new OpenFileDialog();
            openFileDialog.InitialDirectory = Environment.GetFolderPath(Environment.SpecialFolder.Personal);
            openFileDialog.Filter = "Text Files (*.txt)|*.txt|All Files (*.*)|*.*";
            if (openFileDialog.ShowDialog(this) == DialogResult.OK)
            {
                string FileName = openFileDialog.FileName;
            }
        }
        private void form1ToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Form1 f1 = new Form1();
            f1.MdiParent = this;
            f1.Dock = DockStyle.Fill;
            f1.Show();
        }

        private void invoiceToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Form2 f2 = new Form2();
            f2.MdiParent = this;
            f2.Dock = DockStyle.Fill;
            f2.Show();
        }
    }
}
