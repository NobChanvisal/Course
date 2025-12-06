namespace lab_08
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnShowForm2 = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // btnShowForm2
            // 
            this.btnShowForm2.Location = new System.Drawing.Point(219, 222);
            this.btnShowForm2.Name = "btnShowForm2";
            this.btnShowForm2.Size = new System.Drawing.Size(75, 23);
            this.btnShowForm2.TabIndex = 0;
            this.btnShowForm2.Text = "show";
            this.btnShowForm2.UseVisualStyleBackColor = true;
            this.btnShowForm2.Click += new System.EventHandler(this.btnShowForm2_Click_1);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoSize = true;
            this.ClientSize = new System.Drawing.Size(763, 534);
            this.Controls.Add(this.btnShowForm2);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Form1";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button btnShowForm2;
    }
}

