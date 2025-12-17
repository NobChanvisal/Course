namespace lab_13
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
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            this.gpProductInfo = new System.Windows.Forms.GroupBox();
            this.button_browe = new System.Windows.Forms.Button();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.numeric_price = new System.Windows.Forms.NumericUpDown();
            this.txt_description = new System.Windows.Forms.TextBox();
            this.txt_name = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.lbl_price = new System.Windows.Forms.Label();
            this.lbl_name = new System.Windows.Forms.Label();
            this.button_add = new System.Windows.Forms.Button();
            this.dgv = new System.Windows.Forms.DataGridView();
            this.gpProductInfo.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.numeric_price)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dgv)).BeginInit();
            this.SuspendLayout();
            // 
            // gpProductInfo
            // 
            this.gpProductInfo.Controls.Add(this.button_browe);
            this.gpProductInfo.Controls.Add(this.pictureBox1);
            this.gpProductInfo.Controls.Add(this.numeric_price);
            this.gpProductInfo.Controls.Add(this.txt_description);
            this.gpProductInfo.Controls.Add(this.txt_name);
            this.gpProductInfo.Controls.Add(this.label1);
            this.gpProductInfo.Controls.Add(this.lbl_price);
            this.gpProductInfo.Controls.Add(this.lbl_name);
            this.gpProductInfo.Location = new System.Drawing.Point(12, 42);
            this.gpProductInfo.Name = "gpProductInfo";
            this.gpProductInfo.Size = new System.Drawing.Size(776, 129);
            this.gpProductInfo.TabIndex = 0;
            this.gpProductInfo.TabStop = false;
            this.gpProductInfo.Text = "Product information";
            // 
            // button_browe
            // 
            this.button_browe.Location = new System.Drawing.Point(698, 94);
            this.button_browe.Name = "button_browe";
            this.button_browe.Size = new System.Drawing.Size(75, 27);
            this.button_browe.TabIndex = 4;
            this.button_browe.Text = "Browe";
            this.button_browe.UseVisualStyleBackColor = true;
            this.button_browe.Click += new System.EventHandler(this.button_browe_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.pictureBox1.Location = new System.Drawing.Point(593, 13);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(99, 108);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 3;
            this.pictureBox1.TabStop = false;
            // 
            // numeric_price
            // 
            this.numeric_price.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.numeric_price.DecimalPlaces = 2;
            this.numeric_price.Location = new System.Drawing.Point(252, 50);
            this.numeric_price.Name = "numeric_price";
            this.numeric_price.Size = new System.Drawing.Size(81, 22);
            this.numeric_price.TabIndex = 2;
            // 
            // txt_description
            // 
            this.txt_description.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txt_description.Location = new System.Drawing.Point(380, 50);
            this.txt_description.Multiline = true;
            this.txt_description.Name = "txt_description";
            this.txt_description.Size = new System.Drawing.Size(182, 71);
            this.txt_description.TabIndex = 3;
            // 
            // txt_name
            // 
            this.txt_name.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txt_name.Location = new System.Drawing.Point(10, 50);
            this.txt_name.Name = "txt_name";
            this.txt_name.Size = new System.Drawing.Size(182, 22);
            this.txt_name.TabIndex = 1;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(377, 31);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(90, 16);
            this.label1.TabIndex = 0;
            this.label1.Text = "Product name";
            // 
            // lbl_price
            // 
            this.lbl_price.AutoSize = true;
            this.lbl_price.Location = new System.Drawing.Point(249, 31);
            this.lbl_price.Name = "lbl_price";
            this.lbl_price.Size = new System.Drawing.Size(38, 16);
            this.lbl_price.TabIndex = 0;
            this.lbl_price.Text = "Price";
            // 
            // lbl_name
            // 
            this.lbl_name.AutoSize = true;
            this.lbl_name.Location = new System.Drawing.Point(25, 31);
            this.lbl_name.Name = "lbl_name";
            this.lbl_name.Size = new System.Drawing.Size(90, 16);
            this.lbl_name.TabIndex = 0;
            this.lbl_name.Text = "Product name";
            // 
            // button_add
            // 
            this.button_add.Location = new System.Drawing.Point(12, 177);
            this.button_add.Name = "button_add";
            this.button_add.Size = new System.Drawing.Size(115, 34);
            this.button_add.TabIndex = 4;
            this.button_add.Text = "Add new";
            this.button_add.UseVisualStyleBackColor = true;
            this.button_add.Click += new System.EventHandler(this.button_add_Click);
            // 
            // dgv
            // 
            this.dgv.AllowUserToAddRows = false;
            this.dgv.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgv.BackgroundColor = System.Drawing.Color.White;
            this.dgv.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.dgv.ColumnHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleCenter;
            dataGridViewCellStyle1.BackColor = System.Drawing.Color.Gainsboro;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Microsoft Sans Serif", 7.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.Color.Gainsboro;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dgv.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dgv.ColumnHeadersHeight = 30;
            this.dgv.EnableHeadersVisualStyles = false;
            this.dgv.GridColor = System.Drawing.Color.LightGray;
            this.dgv.Location = new System.Drawing.Point(12, 244);
            this.dgv.MultiSelect = false;
            this.dgv.Name = "dgv";
            this.dgv.ReadOnly = true;
            this.dgv.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.Gainsboro;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 7.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.WindowText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.Color.Transparent;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dgv.RowHeadersDefaultCellStyle = dataGridViewCellStyle2;
            this.dgv.RowHeadersVisible = false;
            this.dgv.RowHeadersWidth = 10;
            this.dgv.RowTemplate.Height = 24;
            this.dgv.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dgv.ShowCellErrors = false;
            this.dgv.Size = new System.Drawing.Size(773, 194);
            this.dgv.TabIndex = 7;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.White;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.dgv);
            this.Controls.Add(this.button_add);
            this.Controls.Add(this.gpProductInfo);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Form1";
            this.gpProductInfo.ResumeLayout(false);
            this.gpProductInfo.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.numeric_price)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dgv)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.GroupBox gpProductInfo;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.NumericUpDown numeric_price;
        private System.Windows.Forms.TextBox txt_description;
        private System.Windows.Forms.TextBox txt_name;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label lbl_price;
        private System.Windows.Forms.Label lbl_name;
        private System.Windows.Forms.Button button_browe;
        private System.Windows.Forms.Button button_add;
        private System.Windows.Forms.DataGridView dgv;
    }
}

