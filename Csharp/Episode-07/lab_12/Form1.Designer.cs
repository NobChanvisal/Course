namespace lab_12
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
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle5 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle6 = new System.Windows.Forms.DataGridViewCellStyle();
            this.button_save = new System.Windows.Forms.Button();
            this.txtName = new System.Windows.Forms.TextBox();
            this.gb_studentInsert = new System.Windows.Forms.GroupBox();
            this.txt_addr = new System.Windows.Forms.TextBox();
            this.numericScore = new System.Windows.Forms.NumericUpDown();
            this.gb_gender = new System.Windows.Forms.GroupBox();
            this.radio_Female = new System.Windows.Forms.RadioButton();
            this.radio_Male = new System.Windows.Forms.RadioButton();
            this.lbl_addr = new System.Windows.Forms.Label();
            this.lbl_score = new System.Windows.Forms.Label();
            this.lbl_name = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.dgv = new System.Windows.Forms.DataGridView();
            this.button_update = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            this.button_clear = new System.Windows.Forms.Button();
            this.gb_studentInsert.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.numericScore)).BeginInit();
            this.gb_gender.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgv)).BeginInit();
            this.SuspendLayout();
            // 
            // button_save
            // 
            this.button_save.BackColor = System.Drawing.Color.ForestGreen;
            this.button_save.ForeColor = System.Drawing.Color.White;
            this.button_save.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.button_save.Location = new System.Drawing.Point(12, 224);
            this.button_save.Name = "button_save";
            this.button_save.Size = new System.Drawing.Size(118, 42);
            this.button_save.TabIndex = 5;
            this.button_save.Text = "Add new";
            this.button_save.UseVisualStyleBackColor = false;
            this.button_save.Click += new System.EventHandler(this.button_save_Click);
            // 
            // txtName
            // 
            this.txtName.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtName.Location = new System.Drawing.Point(6, 50);
            this.txtName.Name = "txtName";
            this.txtName.Size = new System.Drawing.Size(209, 22);
            this.txtName.TabIndex = 1;
            // 
            // gb_studentInsert
            // 
            this.gb_studentInsert.Controls.Add(this.txt_addr);
            this.gb_studentInsert.Controls.Add(this.numericScore);
            this.gb_studentInsert.Controls.Add(this.gb_gender);
            this.gb_studentInsert.Controls.Add(this.lbl_addr);
            this.gb_studentInsert.Controls.Add(this.lbl_score);
            this.gb_studentInsert.Controls.Add(this.lbl_name);
            this.gb_studentInsert.Controls.Add(this.txtName);
            this.gb_studentInsert.Location = new System.Drawing.Point(12, 83);
            this.gb_studentInsert.Name = "gb_studentInsert";
            this.gb_studentInsert.Size = new System.Drawing.Size(776, 135);
            this.gb_studentInsert.TabIndex = 2;
            this.gb_studentInsert.TabStop = false;
            this.gb_studentInsert.Text = "Student information";
            // 
            // txt_addr
            // 
            this.txt_addr.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txt_addr.Location = new System.Drawing.Point(570, 50);
            this.txt_addr.Multiline = true;
            this.txt_addr.Name = "txt_addr";
            this.txt_addr.Size = new System.Drawing.Size(200, 62);
            this.txt_addr.TabIndex = 4;
            // 
            // numericScore
            // 
            this.numericScore.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.numericScore.DecimalPlaces = 1;
            this.numericScore.Location = new System.Drawing.Point(430, 50);
            this.numericScore.Name = "numericScore";
            this.numericScore.Size = new System.Drawing.Size(120, 22);
            this.numericScore.TabIndex = 3;
            // 
            // gb_gender
            // 
            this.gb_gender.Controls.Add(this.radio_Female);
            this.gb_gender.Controls.Add(this.radio_Male);
            this.gb_gender.Location = new System.Drawing.Point(236, 31);
            this.gb_gender.Name = "gb_gender";
            this.gb_gender.Size = new System.Drawing.Size(172, 51);
            this.gb_gender.TabIndex = 2;
            this.gb_gender.TabStop = false;
            this.gb_gender.Text = "Gender";
            // 
            // radio_Female
            // 
            this.radio_Female.AutoSize = true;
            this.radio_Female.Location = new System.Drawing.Point(94, 21);
            this.radio_Female.Name = "radio_Female";
            this.radio_Female.Size = new System.Drawing.Size(74, 20);
            this.radio_Female.TabIndex = 0;
            this.radio_Female.TabStop = true;
            this.radio_Female.Text = "Female";
            this.radio_Female.UseVisualStyleBackColor = true;
            // 
            // radio_Male
            // 
            this.radio_Male.AutoSize = true;
            this.radio_Male.Checked = true;
            this.radio_Male.Location = new System.Drawing.Point(6, 21);
            this.radio_Male.Name = "radio_Male";
            this.radio_Male.Size = new System.Drawing.Size(58, 20);
            this.radio_Male.TabIndex = 0;
            this.radio_Male.TabStop = true;
            this.radio_Male.Text = "Male";
            this.radio_Male.UseVisualStyleBackColor = true;
            // 
            // lbl_addr
            // 
            this.lbl_addr.AutoSize = true;
            this.lbl_addr.Location = new System.Drawing.Point(567, 31);
            this.lbl_addr.Name = "lbl_addr";
            this.lbl_addr.Size = new System.Drawing.Size(58, 16);
            this.lbl_addr.TabIndex = 2;
            this.lbl_addr.Text = "Address";
            // 
            // lbl_score
            // 
            this.lbl_score.AutoSize = true;
            this.lbl_score.Location = new System.Drawing.Point(427, 31);
            this.lbl_score.Name = "lbl_score";
            this.lbl_score.Size = new System.Drawing.Size(43, 16);
            this.lbl_score.TabIndex = 2;
            this.lbl_score.Text = "Score";
            // 
            // lbl_name
            // 
            this.lbl_name.AutoSize = true;
            this.lbl_name.Location = new System.Drawing.Point(3, 31);
            this.lbl_name.Name = "lbl_name";
            this.lbl_name.Size = new System.Drawing.Size(62, 16);
            this.lbl_name.TabIndex = 2;
            this.lbl_name.Text = "Fullname";
            // 
            // label1
            // 
            this.label1.Dock = System.Windows.Forms.DockStyle.Top;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(0, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(800, 68);
            this.label1.TabIndex = 0;
            this.label1.Text = "Student Information";
            this.label1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // dgv
            // 
            this.dgv.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgv.BackgroundColor = System.Drawing.Color.White;
            this.dgv.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.dgv.ColumnHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            dataGridViewCellStyle5.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleCenter;
            dataGridViewCellStyle5.BackColor = System.Drawing.Color.Gainsboro;
            dataGridViewCellStyle5.Font = new System.Drawing.Font("Microsoft Sans Serif", 7.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle5.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle5.SelectionBackColor = System.Drawing.Color.Gainsboro;
            dataGridViewCellStyle5.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle5.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dgv.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle5;
            this.dgv.ColumnHeadersHeight = 30;
            this.dgv.EnableHeadersVisualStyles = false;
            this.dgv.GridColor = System.Drawing.Color.LightGray;
            this.dgv.Location = new System.Drawing.Point(12, 287);
            this.dgv.MultiSelect = false;
            this.dgv.Name = "dgv";
            this.dgv.ReadOnly = true;
            this.dgv.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle6.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle6.BackColor = System.Drawing.Color.Gainsboro;
            dataGridViewCellStyle6.Font = new System.Drawing.Font("Microsoft Sans Serif", 7.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle6.ForeColor = System.Drawing.SystemColors.WindowText;
            dataGridViewCellStyle6.SelectionBackColor = System.Drawing.Color.Transparent;
            dataGridViewCellStyle6.SelectionForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle6.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dgv.RowHeadersDefaultCellStyle = dataGridViewCellStyle6;
            this.dgv.RowHeadersVisible = false;
            this.dgv.RowHeadersWidth = 10;
            this.dgv.RowTemplate.Height = 24;
            this.dgv.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dgv.Size = new System.Drawing.Size(770, 194);
            this.dgv.TabIndex = 6;
            this.dgv.CellDoubleClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dgv_CellDoubleClick);
            // 
            // button_update
            // 
            this.button_update.BackColor = System.Drawing.Color.DodgerBlue;
            this.button_update.ForeColor = System.Drawing.Color.White;
            this.button_update.Location = new System.Drawing.Point(166, 224);
            this.button_update.Name = "button_update";
            this.button_update.Size = new System.Drawing.Size(118, 42);
            this.button_update.TabIndex = 5;
            this.button_update.Text = "Update";
            this.button_update.UseVisualStyleBackColor = false;
            this.button_update.Click += new System.EventHandler(this.button_update_Click);
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.Color.Red;
            this.button1.ForeColor = System.Drawing.Color.White;
            this.button1.Location = new System.Drawing.Point(322, 224);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(118, 42);
            this.button1.TabIndex = 5;
            this.button1.Text = "Delete";
            this.button1.UseVisualStyleBackColor = false;
            this.button1.Click += new System.EventHandler(this.button_delete_Click);
            // 
            // button_clear
            // 
            this.button_clear.BackColor = System.Drawing.Color.Red;
            this.button_clear.ForeColor = System.Drawing.Color.White;
            this.button_clear.Location = new System.Drawing.Point(477, 224);
            this.button_clear.Name = "button_clear";
            this.button_clear.Size = new System.Drawing.Size(118, 42);
            this.button_clear.TabIndex = 5;
            this.button_clear.Text = "Clear";
            this.button_clear.UseVisualStyleBackColor = false;
            this.button_clear.Click += new System.EventHandler(this.button_clear_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.White;
            this.ClientSize = new System.Drawing.Size(800, 493);
            this.Controls.Add(this.dgv);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.gb_studentInsert);
            this.Controls.Add(this.button_clear);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.button_update);
            this.Controls.Add(this.button_save);
            this.MaximizeBox = false;
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Form1";
            this.gb_studentInsert.ResumeLayout(false);
            this.gb_studentInsert.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.numericScore)).EndInit();
            this.gb_gender.ResumeLayout(false);
            this.gb_gender.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgv)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button button_save;
        private System.Windows.Forms.TextBox txtName;
        private System.Windows.Forms.GroupBox gb_studentInsert;
        private System.Windows.Forms.GroupBox gb_gender;
        private System.Windows.Forms.RadioButton radio_Male;
        private System.Windows.Forms.Label lbl_name;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.NumericUpDown numericScore;
        private System.Windows.Forms.RadioButton radio_Female;
        private System.Windows.Forms.Label lbl_addr;
        private System.Windows.Forms.Label lbl_score;
        private System.Windows.Forms.TextBox txt_addr;
        private System.Windows.Forms.DataGridView dgv;
        private System.Windows.Forms.Button button_update;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button button_clear;
    }
}

