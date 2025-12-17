using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Xml.Linq;

namespace lab_09
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            noteContent();
            wordWrap();
           
        }
        
        public void noteContent()
        {
            panel1.Padding = new System.Windows.Forms.Padding(8,8,0,0);
            
        }
        
        private bool txtChange = false;
        private bool isLoad = false;
        private string currentFile = ""; // store current opened/created file

        
        public void openFile()
        {
            openFileDialog1.Filter = "Text Files (*.txt)|*.txt|All Files (*.*)|*.*";
            if (openFileDialog1.ShowDialog() == DialogResult.OK)
            {
               
                currentFile = openFileDialog1.FileName;
                isLoad = true;
                txt_content.Text = System.IO.File.ReadAllText(currentFile);
                isLoad = false;
                string name = System.IO.Path.GetFileName(currentFile);

                this.Text = name + " - Notepad";
                txtChange = false;
            }
        }
        private void newToolStripMenuItem_Click(object sender, EventArgs e)
        {
            if (!isModified()) return;

            txt_content.Clear();
            currentFile = "";
            openFileDialog1.FileName = "";
            this.Text = "Untitled - Notepad";
            txtChange = false;

        }
        private void openToolStripMenuItem_Click(object sender, EventArgs e)
        {
            if (!isModified()) return;
            openFile();
              
        }
        
        private void saveToolStripMenuItem_Click(object sender, EventArgs e)
        {
            if (saveFileDialog1.ShowDialog() == DialogResult.OK)
            {
                saveText();
            }
        }

        private void exitToolStripMenuItem_Click(object sender, EventArgs e)
        {
            if(!isModified()) return;
            Application.Exit();
        }
        private void wordWrap()
        {
            if (wordToolStripMenuItem.Checked)
            {
                txt_content.WordWrap = true;
                txt_content.ScrollBars = ScrollBars.Vertical;
            }
            else
            {
                txt_content.WordWrap = false;
                txt_content.ScrollBars = ScrollBars.Both;
            }
        }
        private void wordToolStripMenuItem_Click(object sender, EventArgs e)
        {
            wordWrap();
        }

        private void txt_content_TextChanged(object sender, EventArgs e)
        {
            if(!isLoad)
                txtChange = true;
        }

        private void Form1_FormClosing(object sender, FormClosingEventArgs e)
        {
            if (!isModified()) return;
        }
        
        private void saveText()
        {
            try
            {
                // If new file → show Save As dialog
                if (string.IsNullOrEmpty(currentFile))
                {
                    saveFileDialog1.Filter = "Text Files (*.txt)|*.txt|All Files (*.*)|*.*";
                    if (saveFileDialog1.ShowDialog() != DialogResult.OK)
                        return; // user cancelled Save
                    currentFile = saveFileDialog1.FileName;
                }

                File.WriteAllText(currentFile, txt_content.Text);
                this.Text = Path.GetFileName(currentFile) + " - Notepad";
                txtChange = false;
            }
            catch (Exception ex)
            {
                MessageBox.Show("Failed to save file: " + ex.Message, "Save Error",
                    MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        public bool isModified()
        {

            if (!txtChange) return true;
            DialogResult dg = MessageBox.Show($"Do you want to save change ?", "", MessageBoxButtons.YesNoCancel, MessageBoxIcon.Question);
                if(dg == DialogResult.Yes) {
                    saveText();     
                    return !txtChange; 
                }
                else if(dg == DialogResult.No)
                {
                    return true;
                }
                       
            return false;
        }

        private void fontToolStripMenuItem_Click(object sender, EventArgs e)
        {
            if(fontDialog1.ShowDialog() == DialogResult.OK)
            {
                txtChange = true;
                txt_content.Font = fontDialog1.Font;
            }
        }

        private void cutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            txt_content.Cut();
        }

        private void copyToolStripMenuItem_Click(object sender, EventArgs e)
        {
            txt_content.Copy();
        }

        private void pasteToolStripMenuItem_Click(object sender, EventArgs e)
        {
            txt_content.Paste(); 
        }

        private void deleteToolStripMenuItem_Click(object sender, EventArgs e)
        {
           txt_content.Clear();
        }
    }
}
