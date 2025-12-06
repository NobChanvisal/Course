using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lab_07
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            loadImage();
            setUpTab_control();
        }
        public void loadImage()
        {
            picBox.Image = Properties.Resources.mountain;
        }

        private TextBox CustomTextBox(string text)
        {
            return new TextBox()
            {
                Text = text,
                Multiline = true,
                Location = new System.Drawing.Point(10, 30),
                Size = new System.Drawing.Size(300,290),
                ReadOnly = true,
                BorderStyle = BorderStyle.None,
                BackColor = System.Drawing.Color.White,
               
            };
        }

        public void setUpTab_control()
        {
            Dictionary<string, string> tabContent = new Dictionary<string, string>
            {
                {
                    "history",
                    "I'm baby wolf pickled schlitz try-hard normcore marfa man bun mumblecore vice pop-up XOXO lomo kombucha glossier bicycle rights. Umami kinfolk salvia jean shorts offal venmo. Knausgaard tilde try-hard, woke fixie banjo man bun. Small batch tumeric mustache tbh wayfarers 8-bit shaman chartreuse tacos."
                },
                {
                    "vision",
                    "Man bun PBR&B keytar copper mug prism, hell of helvetica. Synth crucifix offal deep v hella biodiesel. Church-key listicle polaroid put a bird on it chillwave palo santo enamel pin, tattooed meggings franzen la croix cray. Retro yr aesthetic four loko tbh helvetica air plant, neutra palo santo tofu mumblecore. Hoodie bushwick pour-over jean shorts chartreuse shabby chic."
                },
                {
                    "goals",
                    "Chambray authentic truffaut, kickstarter brunch taxidermy vape heirloom four dollar toast raclette shoreditch church-key. Poutine etsy tote bag, cred fingerstache leggings cornhole everyday carry blog gastropub. Brunch biodiesel sartorial mlkshk swag, mixtape hashtag marfa readymade direct trade man braid cold-pressed roof party."
                }
            };

            List<TabPage> tabs = new List<TabPage>
            {
                 new TabPage()
                 {
                     Name = "tabHistory",
                     Text = "History",
                     Controls =
                     {
                         new Label()
                         {
                             Text = "History",
                             AutoSize = true,
                             Font = new System.Drawing.Font("Arial",10F,System.Drawing.FontStyle.Bold),

                             Location = new System.Drawing.Point(10,10)
                         },
                         CustomTextBox(tabContent["history"])
                     }
                     
                 },
                 new TabPage()
                 {
                     Name = "tabVision",
                     Text = "Vision",
                     Controls =
                     {
                         new Label()
                         {
                             Text = "Vision.",
                             AutoSize = true,
                             Font = new System.Drawing.Font("Arial",10F,System.Drawing.FontStyle.Bold),

                             Location = new System.Drawing.Point(10,10)
                         },
                         CustomTextBox(tabContent["vision"])
                     }
                 },
                 new TabPage()
                 {
                     Name = "tabHistory",
                     Text = "Goals",
                     Controls =
                     {
                         new Label()
                         {
                             Text = "Goals.",
                             AutoSize = true,
                             Font = new System.Drawing.Font("Arial",10F,System.Drawing.FontStyle.Bold),

                             Location = new System.Drawing.Point(10,10)
                         },
                         CustomTextBox(tabContent["goals"])
                     }
                 }
            };
            
            tabControl.TabPages.AddRange(tabs.ToArray());
            //add back color to tabpage
            foreach(TabPage tab_page in tabControl.TabPages)
            {
                tab_page.BackColor = Color.White;
            }

            //Label lbl_title = new Label();
            //lbl_title.AutoSize = true;
            //lbl_title.Text = "This title of about.";

            //tabPage1.Controls.Add(lbl_title);
        }

        
    }
}
