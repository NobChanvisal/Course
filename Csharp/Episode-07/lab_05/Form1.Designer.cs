namespace lab_05
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
            this.button_add_to_cart = new System.Windows.Forms.Button();
            this.gpBox_productInfor = new System.Windows.Forms.GroupBox();
            this.lbl_show_total = new System.Windows.Forms.Label();
            this.lbl_total = new System.Windows.Forms.Label();
            this.num_qty = new System.Windows.Forms.NumericUpDown();
            this.cbBox_product = new System.Windows.Forms.ComboBox();
            this.lbl_show_price = new System.Windows.Forms.Label();
            this.lbl_unit_price = new System.Windows.Forms.Label();
            this.lbl_qty = new System.Windows.Forms.Label();
            this.lbl_product = new System.Windows.Forms.Label();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.txtAddr = new System.Windows.Forms.TextBox();
            this.txtPhone = new System.Windows.Forms.TextBox();
            this.txt_name = new System.Windows.Forms.TextBox();
            this.lbl_addr = new System.Windows.Forms.Label();
            this.lbl_phone = new System.Windows.Forms.Label();
            this.lbl_name = new System.Windows.Forms.Label();
            this.groupBox2 = new System.Windows.Forms.GroupBox();
            this.lbl_cart_subTotal = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.button_clear = new System.Windows.Forms.Button();
            this.button_remove = new System.Windows.Forms.Button();
            this.listBox_shoppingCart = new System.Windows.Forms.ListBox();
            this.button_checkOut = new System.Windows.Forms.Button();
            this.gpBox_productInfor.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.num_qty)).BeginInit();
            this.groupBox1.SuspendLayout();
            this.groupBox2.SuspendLayout();
            this.SuspendLayout();
            // 
            // button_add_to_cart
            // 
            this.button_add_to_cart.BackColor = System.Drawing.Color.CornflowerBlue;
            this.button_add_to_cart.Cursor = System.Windows.Forms.Cursors.Hand;
            this.button_add_to_cart.Font = new System.Drawing.Font("Times New Roman", 9F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_add_to_cart.ForeColor = System.Drawing.Color.White;
            this.button_add_to_cart.Location = new System.Drawing.Point(33, 194);
            this.button_add_to_cart.Name = "button_add_to_cart";
            this.button_add_to_cart.Size = new System.Drawing.Size(101, 38);
            this.button_add_to_cart.TabIndex = 7;
            this.button_add_to_cart.Text = "Add to cart";
            this.button_add_to_cart.UseVisualStyleBackColor = false;
            this.button_add_to_cart.Click += new System.EventHandler(this.button_add_to_cart_Click);
            // 
            // gpBox_productInfor
            // 
            this.gpBox_productInfor.Controls.Add(this.lbl_show_total);
            this.gpBox_productInfor.Controls.Add(this.lbl_total);
            this.gpBox_productInfor.Controls.Add(this.num_qty);
            this.gpBox_productInfor.Controls.Add(this.cbBox_product);
            this.gpBox_productInfor.Controls.Add(this.lbl_show_price);
            this.gpBox_productInfor.Controls.Add(this.lbl_unit_price);
            this.gpBox_productInfor.Controls.Add(this.lbl_qty);
            this.gpBox_productInfor.Controls.Add(this.lbl_product);
            this.gpBox_productInfor.Location = new System.Drawing.Point(32, 32);
            this.gpBox_productInfor.Name = "gpBox_productInfor";
            this.gpBox_productInfor.Size = new System.Drawing.Size(574, 156);
            this.gpBox_productInfor.TabIndex = 5;
            this.gpBox_productInfor.TabStop = false;
            this.gpBox_productInfor.Text = "Product information";
            // 
            // lbl_show_total
            // 
            this.lbl_show_total.AutoSize = true;
            this.lbl_show_total.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_show_total.Location = new System.Drawing.Point(81, 121);
            this.lbl_show_total.Name = "lbl_show_total";
            this.lbl_show_total.Size = new System.Drawing.Size(35, 20);
            this.lbl_show_total.TabIndex = 8;
            this.lbl_show_total.Text = "$ 0";
            // 
            // lbl_total
            // 
            this.lbl_total.AutoSize = true;
            this.lbl_total.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_total.Location = new System.Drawing.Point(19, 121);
            this.lbl_total.Name = "lbl_total";
            this.lbl_total.Size = new System.Drawing.Size(56, 20);
            this.lbl_total.TabIndex = 8;
            this.lbl_total.Text = "Total :";
            // 
            // num_qty
            // 
            this.num_qty.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.num_qty.Location = new System.Drawing.Point(244, 60);
            this.num_qty.Name = "num_qty";
            this.num_qty.Size = new System.Drawing.Size(184, 30);
            this.num_qty.TabIndex = 2;
            this.num_qty.Value = new decimal(new int[] {
            1,
            0,
            0,
            0});
            this.num_qty.ValueChanged += new System.EventHandler(this.num_qty_ValueChanged);
            // 
            // cbBox_product
            // 
            this.cbBox_product.BackColor = System.Drawing.Color.White;
            this.cbBox_product.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.cbBox_product.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbBox_product.FormattingEnabled = true;
            this.cbBox_product.Location = new System.Drawing.Point(21, 60);
            this.cbBox_product.Name = "cbBox_product";
            this.cbBox_product.Size = new System.Drawing.Size(184, 30);
            this.cbBox_product.TabIndex = 1;
            this.cbBox_product.SelectedIndexChanged += new System.EventHandler(this.cbBox_product_SelectedIndexChanged);
            // 
            // lbl_show_price
            // 
            this.lbl_show_price.AutoSize = true;
            this.lbl_show_price.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_show_price.Location = new System.Drawing.Point(473, 64);
            this.lbl_show_price.Name = "lbl_show_price";
            this.lbl_show_price.Size = new System.Drawing.Size(32, 20);
            this.lbl_show_price.TabIndex = 3;
            this.lbl_show_price.Text = "$ 0";
            // 
            // lbl_unit_price
            // 
            this.lbl_unit_price.AutoSize = true;
            this.lbl_unit_price.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_unit_price.Location = new System.Drawing.Point(473, 37);
            this.lbl_unit_price.Name = "lbl_unit_price";
            this.lbl_unit_price.Size = new System.Drawing.Size(83, 20);
            this.lbl_unit_price.TabIndex = 5;
            this.lbl_unit_price.Text = "Unit Price";
            // 
            // lbl_qty
            // 
            this.lbl_qty.AutoSize = true;
            this.lbl_qty.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_qty.Location = new System.Drawing.Point(240, 37);
            this.lbl_qty.Name = "lbl_qty";
            this.lbl_qty.Size = new System.Drawing.Size(71, 20);
            this.lbl_qty.TabIndex = 6;
            this.lbl_qty.Text = "Quantity";
            // 
            // lbl_product
            // 
            this.lbl_product.AutoSize = true;
            this.lbl_product.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_product.Location = new System.Drawing.Point(17, 37);
            this.lbl_product.Name = "lbl_product";
            this.lbl_product.Size = new System.Drawing.Size(67, 20);
            this.lbl_product.TabIndex = 7;
            this.lbl_product.Text = "Product";
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.txtAddr);
            this.groupBox1.Controls.Add(this.txtPhone);
            this.groupBox1.Controls.Add(this.txt_name);
            this.groupBox1.Controls.Add(this.lbl_addr);
            this.groupBox1.Controls.Add(this.lbl_phone);
            this.groupBox1.Controls.Add(this.lbl_name);
            this.groupBox1.Location = new System.Drawing.Point(33, 438);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(574, 274);
            this.groupBox1.TabIndex = 6;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Delivery information";
            // 
            // txtAddr
            // 
            this.txtAddr.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtAddr.Location = new System.Drawing.Point(22, 185);
            this.txtAddr.Multiline = true;
            this.txtAddr.Name = "txtAddr";
            this.txtAddr.Size = new System.Drawing.Size(535, 77);
            this.txtAddr.TabIndex = 6;
            // 
            // txtPhone
            // 
            this.txtPhone.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtPhone.Location = new System.Drawing.Point(22, 115);
            this.txtPhone.Name = "txtPhone";
            this.txtPhone.Size = new System.Drawing.Size(535, 30);
            this.txtPhone.TabIndex = 5;
            // 
            // txt_name
            // 
            this.txt_name.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_name.Location = new System.Drawing.Point(22, 46);
            this.txt_name.Name = "txt_name";
            this.txt_name.Size = new System.Drawing.Size(535, 30);
            this.txt_name.TabIndex = 4;
            // 
            // lbl_addr
            // 
            this.lbl_addr.AutoSize = true;
            this.lbl_addr.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_addr.Location = new System.Drawing.Point(18, 162);
            this.lbl_addr.Name = "lbl_addr";
            this.lbl_addr.Size = new System.Drawing.Size(71, 20);
            this.lbl_addr.TabIndex = 4;
            this.lbl_addr.Text = "Address";
            // 
            // lbl_phone
            // 
            this.lbl_phone.AutoSize = true;
            this.lbl_phone.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_phone.Location = new System.Drawing.Point(18, 92);
            this.lbl_phone.Name = "lbl_phone";
            this.lbl_phone.Size = new System.Drawing.Size(56, 20);
            this.lbl_phone.TabIndex = 5;
            this.lbl_phone.Text = "Phone";
            // 
            // lbl_name
            // 
            this.lbl_name.AutoSize = true;
            this.lbl_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_name.Location = new System.Drawing.Point(18, 23);
            this.lbl_name.Name = "lbl_name";
            this.lbl_name.Size = new System.Drawing.Size(53, 20);
            this.lbl_name.TabIndex = 6;
            this.lbl_name.Text = "Name";
            // 
            // groupBox2
            // 
            this.groupBox2.Controls.Add(this.lbl_cart_subTotal);
            this.groupBox2.Controls.Add(this.label1);
            this.groupBox2.Controls.Add(this.button_clear);
            this.groupBox2.Controls.Add(this.button_remove);
            this.groupBox2.Controls.Add(this.listBox_shoppingCart);
            this.groupBox2.Location = new System.Drawing.Point(32, 248);
            this.groupBox2.Name = "groupBox2";
            this.groupBox2.Size = new System.Drawing.Size(574, 184);
            this.groupBox2.TabIndex = 8;
            this.groupBox2.TabStop = false;
            this.groupBox2.Text = "shopping cart";
            // 
            // lbl_cart_subTotal
            // 
            this.lbl_cart_subTotal.AutoSize = true;
            this.lbl_cart_subTotal.Font = new System.Drawing.Font("Microsoft Sans Serif", 7.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_cart_subTotal.Location = new System.Drawing.Point(92, 142);
            this.lbl_cart_subTotal.Name = "lbl_cart_subTotal";
            this.lbl_cart_subTotal.Size = new System.Drawing.Size(27, 16);
            this.lbl_cart_subTotal.TabIndex = 2;
            this.lbl_cart_subTotal.Text = "$ 0";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 7.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(17, 142);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(69, 16);
            this.label1.TabIndex = 8;
            this.label1.Text = "Sub total =";
            // 
            // button_clear
            // 
            this.button_clear.BackColor = System.Drawing.Color.Red;
            this.button_clear.ForeColor = System.Drawing.Color.White;
            this.button_clear.Location = new System.Drawing.Point(344, 146);
            this.button_clear.Name = "button_clear";
            this.button_clear.Size = new System.Drawing.Size(103, 32);
            this.button_clear.TabIndex = 1;
            this.button_clear.Text = "clear all";
            this.button_clear.UseVisualStyleBackColor = false;
            this.button_clear.Click += new System.EventHandler(this.button_clear_Click);
            // 
            // button_remove
            // 
            this.button_remove.BackColor = System.Drawing.Color.Red;
            this.button_remove.ForeColor = System.Drawing.Color.White;
            this.button_remove.Location = new System.Drawing.Point(453, 146);
            this.button_remove.Name = "button_remove";
            this.button_remove.Size = new System.Drawing.Size(103, 32);
            this.button_remove.TabIndex = 1;
            this.button_remove.Text = "remove item";
            this.button_remove.UseVisualStyleBackColor = false;
            this.button_remove.Click += new System.EventHandler(this.button_remove_Click);
            // 
            // listBox_shoppingCart
            // 
            this.listBox_shoppingCart.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.listBox_shoppingCart.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.listBox_shoppingCart.FormattingEnabled = true;
            this.listBox_shoppingCart.ItemHeight = 22;
            this.listBox_shoppingCart.Location = new System.Drawing.Point(17, 30);
            this.listBox_shoppingCart.Name = "listBox_shoppingCart";
            this.listBox_shoppingCart.Size = new System.Drawing.Size(539, 90);
            this.listBox_shoppingCart.TabIndex = 0;
            // 
            // button_checkOut
            // 
            this.button_checkOut.BackColor = System.Drawing.Color.SeaGreen;
            this.button_checkOut.ForeColor = System.Drawing.Color.White;
            this.button_checkOut.Location = new System.Drawing.Point(33, 718);
            this.button_checkOut.Name = "button_checkOut";
            this.button_checkOut.Size = new System.Drawing.Size(163, 40);
            this.button_checkOut.TabIndex = 9;
            this.button_checkOut.Text = "Check out";
            this.button_checkOut.UseVisualStyleBackColor = false;
            this.button_checkOut.Click += new System.EventHandler(this.button_checkOut_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.WhiteSmoke;
            this.ClientSize = new System.Drawing.Size(636, 770);
            this.Controls.Add(this.button_checkOut);
            this.Controls.Add(this.button_add_to_cart);
            this.Controls.Add(this.groupBox2);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.gpBox_productInfor);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Sale form";
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.Form1_FormClosing);
            this.gpBox_productInfor.ResumeLayout(false);
            this.gpBox_productInfor.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.num_qty)).EndInit();
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.groupBox2.ResumeLayout(false);
            this.groupBox2.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.Button button_add_to_cart;
        private System.Windows.Forms.GroupBox gpBox_productInfor;
        private System.Windows.Forms.NumericUpDown num_qty;
        private System.Windows.Forms.ComboBox cbBox_product;
        private System.Windows.Forms.Label lbl_show_price;
        private System.Windows.Forms.Label lbl_unit_price;
        private System.Windows.Forms.Label lbl_qty;
        private System.Windows.Forms.Label lbl_product;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.TextBox txtAddr;
        private System.Windows.Forms.TextBox txtPhone;
        private System.Windows.Forms.TextBox txt_name;
        private System.Windows.Forms.Label lbl_addr;
        private System.Windows.Forms.Label lbl_phone;
        private System.Windows.Forms.Label lbl_name;
        private System.Windows.Forms.Label lbl_show_total;
        private System.Windows.Forms.Label lbl_total;
        private System.Windows.Forms.GroupBox groupBox2;
        private System.Windows.Forms.Button button_remove;
        private System.Windows.Forms.ListBox listBox_shoppingCart;
        private System.Windows.Forms.Label lbl_cart_subTotal;
        private System.Windows.Forms.Button button_clear;
        private System.Windows.Forms.Button button_checkOut;
        private System.Windows.Forms.Label label1;
    }
}

