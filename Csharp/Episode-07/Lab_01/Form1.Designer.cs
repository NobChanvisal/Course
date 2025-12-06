namespace Lab_01
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
            this.label1 = new System.Windows.Forms.Label();
            this.txt_number1 = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.txt_number2 = new System.Windows.Forms.TextBox();
            this.txt_result = new System.Windows.Forms.Label();
            this.button_add = new System.Windows.Forms.Button();
            this.button_minus = new System.Windows.Forms.Button();
            this.button_mul = new System.Windows.Forms.Button();
            this.button_divis = new System.Windows.Forms.Button();
            this.button_clear = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(140, 40);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(143, 32);
            this.label1.TabIndex = 0;
            this.label1.Text = "Calculator";
            // 
            // txt_number1
            // 
            this.txt_number1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_number1.Location = new System.Drawing.Point(75, 151);
            this.txt_number1.Name = "txt_number1";
            this.txt_number1.Size = new System.Drawing.Size(270, 30);
            this.txt_number1.TabIndex = 1;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(70, 123);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(97, 25);
            this.label2.TabIndex = 0;
            this.label2.Text = "Number 1";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(70, 200);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(97, 25);
            this.label3.TabIndex = 0;
            this.label3.Text = "Number 2";
            // 
            // txt_number2
            // 
            this.txt_number2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_number2.Location = new System.Drawing.Point(75, 228);
            this.txt_number2.Name = "txt_number2";
            this.txt_number2.Size = new System.Drawing.Size(270, 30);
            this.txt_number2.TabIndex = 2;
            // 
            // txt_result
            // 
            this.txt_result.AutoSize = true;
            this.txt_result.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_result.Location = new System.Drawing.Point(70, 277);
            this.txt_result.Name = "txt_result";
            this.txt_result.Size = new System.Drawing.Size(99, 25);
            this.txt_result.TabIndex = 0;
            this.txt_result.Text = "Result = 0";
            // 
            // button_add
            // 
            this.button_add.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_add.Location = new System.Drawing.Point(75, 324);
            this.button_add.Name = "button_add";
            this.button_add.Size = new System.Drawing.Size(50, 50);
            this.button_add.TabIndex = 2;
            this.button_add.Text = "+";
            this.button_add.UseVisualStyleBackColor = true;
            this.button_add.Click += new System.EventHandler(this.button_add_Click);
            // 
            // button_minus
            // 
            this.button_minus.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_minus.Location = new System.Drawing.Point(146, 324);
            this.button_minus.Name = "button_minus";
            this.button_minus.Size = new System.Drawing.Size(50, 50);
            this.button_minus.TabIndex = 2;
            this.button_minus.Text = "-";
            this.button_minus.UseVisualStyleBackColor = true;
            this.button_minus.Click += new System.EventHandler(this.button_minus_Click);
            // 
            // button_mul
            // 
            this.button_mul.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_mul.Location = new System.Drawing.Point(215, 324);
            this.button_mul.Name = "button_mul";
            this.button_mul.Size = new System.Drawing.Size(50, 50);
            this.button_mul.TabIndex = 2;
            this.button_mul.Text = "x";
            this.button_mul.UseVisualStyleBackColor = true;
            this.button_mul.Click += new System.EventHandler(this.button_mul_Click);
            // 
            // button_divis
            // 
            this.button_divis.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_divis.Location = new System.Drawing.Point(284, 324);
            this.button_divis.Name = "button_divis";
            this.button_divis.Size = new System.Drawing.Size(50, 50);
            this.button_divis.TabIndex = 2;
            this.button_divis.Text = "\\";
            this.button_divis.UseVisualStyleBackColor = true;
            this.button_divis.Click += new System.EventHandler(this.button_divis_Click);
            // 
            // button_clear
            // 
            this.button_clear.BackColor = System.Drawing.Color.Red;
            this.button_clear.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_clear.ForeColor = System.Drawing.Color.White;
            this.button_clear.Location = new System.Drawing.Point(75, 396);
            this.button_clear.Name = "button_clear";
            this.button_clear.Size = new System.Drawing.Size(121, 50);
            this.button_clear.TabIndex = 2;
            this.button_clear.Text = "clear";
            this.button_clear.UseVisualStyleBackColor = false;
            this.button_clear.Click += new System.EventHandler(this.button_clear_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(413, 527);
            this.Controls.Add(this.button_divis);
            this.Controls.Add(this.button_mul);
            this.Controls.Add(this.button_minus);
            this.Controls.Add(this.button_clear);
            this.Controls.Add(this.button_add);
            this.Controls.Add(this.txt_number2);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.txt_number1);
            this.Controls.Add(this.txt_result);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Mini calculator";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txt_number1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txt_number2;
        private System.Windows.Forms.Label txt_result;
        private System.Windows.Forms.Button button_add;
        private System.Windows.Forms.Button button_minus;
        private System.Windows.Forms.Button button_mul;
        private System.Windows.Forms.Button button_divis;
        private System.Windows.Forms.Button button_clear;
    }
}

