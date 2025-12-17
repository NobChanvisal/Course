namespace lab_11
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
            this.panel1 = new System.Windows.Forms.Panel();
            this.tablePanel = new System.Windows.Forms.TableLayoutPanel();
            this.button_purchase = new System.Windows.Forms.Button();
            this.lbl_totalValue = new System.Windows.Forms.Label();
            this.lbl_total = new System.Windows.Forms.Label();
            this.flowLayoutPanel1 = new System.Windows.Forms.FlowLayoutPanel();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // lbl_title
            // 
            this.lbl_title.BackColor = System.Drawing.Color.White;
            this.lbl_title.Dock = System.Windows.Forms.DockStyle.Top;
            this.lbl_title.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_title.Location = new System.Drawing.Point(5, 5);
            this.lbl_title.Name = "lbl_title";
            this.lbl_title.Size = new System.Drawing.Size(927, 81);
            this.lbl_title.TabIndex = 0;
            this.lbl_title.Text = "Market";
            this.lbl_title.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.White;
            this.panel1.Controls.Add(this.tablePanel);
            this.panel1.Controls.Add(this.button_purchase);
            this.panel1.Controls.Add(this.lbl_totalValue);
            this.panel1.Controls.Add(this.lbl_total);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Right;
            this.panel1.Location = new System.Drawing.Point(572, 86);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(360, 479);
            this.panel1.TabIndex = 1;
            // 
            // tablePanel
            // 
            this.tablePanel.AutoSize = true;
            this.tablePanel.BackColor = System.Drawing.Color.White;
            this.tablePanel.CellBorderStyle = System.Windows.Forms.TableLayoutPanelCellBorderStyle.Single;
            this.tablePanel.ColumnCount = 5;
            this.tablePanel.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Absolute, 50F));
            this.tablePanel.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Absolute, 110F));
            this.tablePanel.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Absolute, 42F));
            this.tablePanel.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Absolute, 60F));
            this.tablePanel.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Absolute, 85F));
            this.tablePanel.Font = new System.Drawing.Font("Microsoft Sans Serif", 6F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.tablePanel.Location = new System.Drawing.Point(3, 3);
            this.tablePanel.Margin = new System.Windows.Forms.Padding(5);
            this.tablePanel.Name = "tablePanel";
            this.tablePanel.RowCount = 1;
            this.tablePanel.RowStyles.Add(new System.Windows.Forms.RowStyle(System.Windows.Forms.SizeType.Percent, 100F));
            this.tablePanel.Size = new System.Drawing.Size(354, 53);
            this.tablePanel.TabIndex = 4;
            // 
            // button_purchase
            // 
            this.button_purchase.BackColor = System.Drawing.Color.DarkSeaGreen;
            this.button_purchase.Location = new System.Drawing.Point(6, 423);
            this.button_purchase.Name = "button_purchase";
            this.button_purchase.Size = new System.Drawing.Size(264, 42);
            this.button_purchase.TabIndex = 3;
            this.button_purchase.Text = "Purchase";
            this.button_purchase.UseVisualStyleBackColor = false;
            this.button_purchase.Click += new System.EventHandler(this.button_purchase_Click);
            // 
            // lbl_totalValue
            // 
            this.lbl_totalValue.AutoSize = true;
            this.lbl_totalValue.Font = new System.Drawing.Font("Microsoft Sans Serif", 7.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_totalValue.Location = new System.Drawing.Point(62, 371);
            this.lbl_totalValue.Name = "lbl_totalValue";
            this.lbl_totalValue.Size = new System.Drawing.Size(27, 16);
            this.lbl_totalValue.TabIndex = 1;
            this.lbl_totalValue.Text = "$ 0";
            // 
            // lbl_total
            // 
            this.lbl_total.AutoSize = true;
            this.lbl_total.Location = new System.Drawing.Point(3, 371);
            this.lbl_total.Name = "lbl_total";
            this.lbl_total.Size = new System.Drawing.Size(44, 16);
            this.lbl_total.TabIndex = 1;
            this.lbl_total.Text = "Total :";
            // 
            // flowLayoutPanel1
            // 
            this.flowLayoutPanel1.AutoSize = true;
            this.flowLayoutPanel1.BackColor = System.Drawing.Color.WhiteSmoke;
            this.flowLayoutPanel1.Dock = System.Windows.Forms.DockStyle.Fill;
            this.flowLayoutPanel1.Location = new System.Drawing.Point(5, 86);
            this.flowLayoutPanel1.Margin = new System.Windows.Forms.Padding(0);
            this.flowLayoutPanel1.Name = "flowLayoutPanel1";
            this.flowLayoutPanel1.Size = new System.Drawing.Size(567, 479);
            this.flowLayoutPanel1.TabIndex = 3;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(937, 570);
            this.Controls.Add(this.flowLayoutPanel1);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.lbl_title);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "Form1";
            this.Padding = new System.Windows.Forms.Padding(5);
            this.Text = "Form1";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lbl_title;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.FlowLayoutPanel flowLayoutPanel1;
        private System.Windows.Forms.Button button_purchase;
        private System.Windows.Forms.Label lbl_total;
        private System.Windows.Forms.TableLayoutPanel tablePanel;
        private System.Windows.Forms.Label lbl_totalValue;
    }
}

