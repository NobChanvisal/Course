namespace Lab_02
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
            this.num_amount = new System.Windows.Forms.NumericUpDown();
            this.label1 = new System.Windows.Forms.Label();
            this.combo_from = new System.Windows.Forms.ComboBox();
            this.button_convert = new System.Windows.Forms.Button();
            this.lbl_from = new System.Windows.Forms.Label();
            this.lbl_result = new System.Windows.Forms.Label();
            this.combo_to = new System.Windows.Forms.ComboBox();
            this.lbl_to = new System.Windows.Forms.Label();
            this.lbl_rate = new System.Windows.Forms.Label();
            this.button_clear = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.num_amount)).BeginInit();
            this.SuspendLayout();
            // 
            // num_amount
            // 
            this.num_amount.DecimalPlaces = 2;
            this.num_amount.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.num_amount.Increment = new decimal(new int[] {
            1,
            0,
            0,
            131072});
            this.num_amount.Location = new System.Drawing.Point(234, 100);
            this.num_amount.Maximum = new decimal(new int[] {
            1000000,
            0,
            0,
            0});
            this.num_amount.Name = "num_amount";
            this.num_amount.Size = new System.Drawing.Size(182, 30);
            this.num_amount.TabIndex = 0;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(185, 30);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(277, 32);
            this.label1.TabIndex = 1;
            this.label1.Text = "Currency Converter";
            // 
            // combo_from
            // 
            this.combo_from.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.combo_from.FormattingEnabled = true;
            this.combo_from.Location = new System.Drawing.Point(84, 199);
            this.combo_from.Name = "combo_from";
            this.combo_from.Size = new System.Drawing.Size(182, 33);
            this.combo_from.TabIndex = 2;
            // 
            // button_convert
            // 
            this.button_convert.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_convert.Location = new System.Drawing.Point(84, 351);
            this.button_convert.Name = "button_convert";
            this.button_convert.Size = new System.Drawing.Size(120, 40);
            this.button_convert.TabIndex = 3;
            this.button_convert.Text = "Convert";
            this.button_convert.UseVisualStyleBackColor = true;
            this.button_convert.Click += new System.EventHandler(this.button_convert_Click);
            // 
            // lbl_from
            // 
            this.lbl_from.AutoSize = true;
            this.lbl_from.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_from.Location = new System.Drawing.Point(81, 180);
            this.lbl_from.Name = "lbl_from";
            this.lbl_from.Size = new System.Drawing.Size(57, 25);
            this.lbl_from.TabIndex = 4;
            this.lbl_from.Text = "From";
            // 
            // lbl_result
            // 
            this.lbl_result.AutoSize = true;
            this.lbl_result.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_result.Location = new System.Drawing.Point(81, 261);
            this.lbl_result.Name = "lbl_result";
            this.lbl_result.Size = new System.Drawing.Size(125, 25);
            this.lbl_result.TabIndex = 4;
            this.lbl_result.Text = "Converted: 0";
            // 
            // combo_to
            // 
            this.combo_to.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.combo_to.FormattingEnabled = true;
            this.combo_to.Location = new System.Drawing.Point(355, 199);
            this.combo_to.Name = "combo_to";
            this.combo_to.Size = new System.Drawing.Size(182, 33);
            this.combo_to.TabIndex = 2;
            // 
            // lbl_to
            // 
            this.lbl_to.AutoSize = true;
            this.lbl_to.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_to.Location = new System.Drawing.Point(352, 180);
            this.lbl_to.Name = "lbl_to";
            this.lbl_to.Size = new System.Drawing.Size(36, 25);
            this.lbl_to.TabIndex = 4;
            this.lbl_to.Text = "To";
            // 
            // lbl_rate
            // 
            this.lbl_rate.AutoSize = true;
            this.lbl_rate.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_rate.Location = new System.Drawing.Point(81, 298);
            this.lbl_rate.Name = "lbl_rate";
            this.lbl_rate.Size = new System.Drawing.Size(124, 25);
            this.lbl_rate.TabIndex = 4;
            this.lbl_rate.Text = "Rate          : 0";
            // 
            // button_clear
            // 
            this.button_clear.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_clear.Location = new System.Drawing.Point(84, 409);
            this.button_clear.Name = "button_clear";
            this.button_clear.Size = new System.Drawing.Size(120, 40);
            this.button_clear.TabIndex = 3;
            this.button_clear.Text = "Clear";
            this.button_clear.UseVisualStyleBackColor = true;
            this.button_clear.Click += new System.EventHandler(this.button_clear_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(630, 533);
            this.Controls.Add(this.lbl_rate);
            this.Controls.Add(this.lbl_result);
            this.Controls.Add(this.lbl_to);
            this.Controls.Add(this.lbl_from);
            this.Controls.Add(this.button_clear);
            this.Controls.Add(this.button_convert);
            this.Controls.Add(this.combo_to);
            this.Controls.Add(this.combo_from);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.num_amount);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Currency Converter";
            ((System.ComponentModel.ISupportInitialize)(this.num_amount)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.NumericUpDown num_amount;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.ComboBox combo_from;
        private System.Windows.Forms.Button button_convert;
        private System.Windows.Forms.Label lbl_from;
        private System.Windows.Forms.Label lbl_result;
        private System.Windows.Forms.ComboBox combo_to;
        private System.Windows.Forms.Label lbl_to;
        private System.Windows.Forms.Label lbl_rate;
        private System.Windows.Forms.Button button_clear;
    }
}

