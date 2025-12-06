namespace Lab_03
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
            this.lbl_title = new System.Windows.Forms.Label();
            this.txt_Id = new System.Windows.Forms.TextBox();
            this.lbl_Id = new System.Windows.Forms.Label();
            this.txt_name = new System.Windows.Forms.TextBox();
            this.lbl_name = new System.Windows.Forms.Label();
            this.lbl_price = new System.Windows.Forms.Label();
            this.num_price = new System.Windows.Forms.NumericUpDown();
            this.cb_category = new System.Windows.Forms.ComboBox();
            this.label1 = new System.Windows.Forms.Label();
            this.listBox_student_list = new System.Windows.Forms.ListBox();
            this.button_add = new System.Windows.Forms.Button();
            this.lbl_count = new System.Windows.Forms.Label();
            this.radio_red = new System.Windows.Forms.RadioButton();
            this.radio_blue = new System.Windows.Forms.RadioButton();
            this.group_color = new System.Windows.Forms.GroupBox();
            this.radio_none = new System.Windows.Forms.RadioButton();
            ((System.ComponentModel.ISupportInitialize)(this.num_price)).BeginInit();
            this.group_color.SuspendLayout();
            this.SuspendLayout();
            // 
            // lbl_title
            // 
            this.lbl_title.AutoSize = true;
            this.lbl_title.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_title.Location = new System.Drawing.Point(386, 34);
            this.lbl_title.Name = "lbl_title";
            this.lbl_title.Size = new System.Drawing.Size(178, 32);
            this.lbl_title.TabIndex = 0;
            this.lbl_title.Text = "Products List";
            // 
            // txt_Id
            // 
            this.txt_Id.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txt_Id.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_Id.Location = new System.Drawing.Point(44, 116);
            this.txt_Id.Name = "txt_Id";
            this.txt_Id.Size = new System.Drawing.Size(188, 30);
            this.txt_Id.TabIndex = 1;
            // 
            // lbl_Id
            // 
            this.lbl_Id.AutoSize = true;
            this.lbl_Id.Location = new System.Drawing.Point(50, 106);
            this.lbl_Id.Name = "lbl_Id";
            this.lbl_Id.Size = new System.Drawing.Size(20, 16);
            this.lbl_Id.TabIndex = 2;
            this.lbl_Id.Text = "ID";
            // 
            // txt_name
            // 
            this.txt_name.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txt_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_name.Location = new System.Drawing.Point(263, 116);
            this.txt_name.Name = "txt_name";
            this.txt_name.Size = new System.Drawing.Size(188, 30);
            this.txt_name.TabIndex = 2;
            // 
            // lbl_name
            // 
            this.lbl_name.AutoSize = true;
            this.lbl_name.Location = new System.Drawing.Point(269, 106);
            this.lbl_name.Name = "lbl_name";
            this.lbl_name.Size = new System.Drawing.Size(44, 16);
            this.lbl_name.TabIndex = 2;
            this.lbl_name.Text = "Name";
            // 
            // lbl_price
            // 
            this.lbl_price.AutoSize = true;
            this.lbl_price.Location = new System.Drawing.Point(501, 106);
            this.lbl_price.Name = "lbl_price";
            this.lbl_price.Size = new System.Drawing.Size(38, 16);
            this.lbl_price.TabIndex = 2;
            this.lbl_price.Text = "Price";
            // 
            // num_price
            // 
            this.num_price.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.num_price.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.num_price.Location = new System.Drawing.Point(492, 116);
            this.num_price.Name = "num_price";
            this.num_price.Size = new System.Drawing.Size(120, 30);
            this.num_price.TabIndex = 3;
            // 
            // cb_category
            // 
            this.cb_category.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.cb_category.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cb_category.FormattingEnabled = true;
            this.cb_category.Location = new System.Drawing.Point(661, 116);
            this.cb_category.Name = "cb_category";
            this.cb_category.Size = new System.Drawing.Size(188, 33);
            this.cb_category.TabIndex = 4;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(670, 106);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(62, 16);
            this.label1.TabIndex = 2;
            this.label1.Text = "Category";
            // 
            // listBox_student_list
            // 
            this.listBox_student_list.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.listBox_student_list.FormattingEnabled = true;
            this.listBox_student_list.ItemHeight = 25;
            this.listBox_student_list.Location = new System.Drawing.Point(45, 303);
            this.listBox_student_list.Name = "listBox_student_list";
            this.listBox_student_list.Size = new System.Drawing.Size(804, 179);
            this.listBox_student_list.TabIndex = 5;
            // 
            // button_add
            // 
            this.button_add.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_add.Location = new System.Drawing.Point(44, 242);
            this.button_add.Name = "button_add";
            this.button_add.Size = new System.Drawing.Size(150, 45);
            this.button_add.TabIndex = 6;
            this.button_add.Text = "Add new";
            this.button_add.UseVisualStyleBackColor = true;
            this.button_add.Click += new System.EventHandler(this.button_add_Click);
            // 
            // lbl_count
            // 
            this.lbl_count.AutoSize = true;
            this.lbl_count.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_count.Location = new System.Drawing.Point(39, 497);
            this.lbl_count.Name = "lbl_count";
            this.lbl_count.Size = new System.Drawing.Size(153, 25);
            this.lbl_count.TabIndex = 7;
            this.lbl_count.Text = "Total product : 0";
            // 
            // radio_red
            // 
            this.radio_red.AutoSize = true;
            this.radio_red.Location = new System.Drawing.Point(6, 21);
            this.radio_red.Name = "radio_red";
            this.radio_red.Size = new System.Drawing.Size(54, 20);
            this.radio_red.TabIndex = 8;
            this.radio_red.TabStop = true;
            this.radio_red.Text = "Red";
            this.radio_red.UseVisualStyleBackColor = true;
            // 
            // radio_blue
            // 
            this.radio_blue.AutoSize = true;
            this.radio_blue.Location = new System.Drawing.Point(92, 21);
            this.radio_blue.Name = "radio_blue";
            this.radio_blue.Size = new System.Drawing.Size(55, 20);
            this.radio_blue.TabIndex = 8;
            this.radio_blue.TabStop = true;
            this.radio_blue.Text = "Blue";
            this.radio_blue.UseVisualStyleBackColor = true;
            // 
            // group_color
            // 
            this.group_color.Controls.Add(this.radio_red);
            this.group_color.Controls.Add(this.radio_none);
            this.group_color.Controls.Add(this.radio_blue);
            this.group_color.Location = new System.Drawing.Point(44, 169);
            this.group_color.Name = "group_color";
            this.group_color.Size = new System.Drawing.Size(264, 56);
            this.group_color.TabIndex = 9;
            this.group_color.TabStop = false;
            this.group_color.Text = "Color";
            // 
            // radio_none
            // 
            this.radio_none.AutoSize = true;
            this.radio_none.Checked = true;
            this.radio_none.Location = new System.Drawing.Point(172, 21);
            this.radio_none.Name = "radio_none";
            this.radio_none.Size = new System.Drawing.Size(61, 20);
            this.radio_none.TabIndex = 8;
            this.radio_none.TabStop = true;
            this.radio_none.Text = "None";
            this.radio_none.UseVisualStyleBackColor = true;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(885, 576);
            this.Controls.Add(this.group_color);
            this.Controls.Add(this.lbl_count);
            this.Controls.Add(this.button_add);
            this.Controls.Add(this.listBox_student_list);
            this.Controls.Add(this.lbl_price);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.lbl_name);
            this.Controls.Add(this.lbl_Id);
            this.Controls.Add(this.txt_name);
            this.Controls.Add(this.txt_Id);
            this.Controls.Add(this.lbl_title);
            this.Controls.Add(this.num_price);
            this.Controls.Add(this.cb_category);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)(this.num_price)).EndInit();
            this.group_color.ResumeLayout(false);
            this.group_color.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lbl_title;
        private System.Windows.Forms.TextBox txt_Id;
        private System.Windows.Forms.Label lbl_Id;
        private System.Windows.Forms.TextBox txt_name;
        private System.Windows.Forms.Label lbl_name;
        private System.Windows.Forms.Label lbl_price;
        private System.Windows.Forms.NumericUpDown num_price;
        private System.Windows.Forms.ComboBox cb_category;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.ListBox listBox_student_list;
        private System.Windows.Forms.Button button_add;
        private System.Windows.Forms.Label lbl_count;
        private System.Windows.Forms.RadioButton radio_red;
        private System.Windows.Forms.RadioButton radio_blue;
        private System.Windows.Forms.GroupBox group_color;
        private System.Windows.Forms.RadioButton radio_none;
    }
}

