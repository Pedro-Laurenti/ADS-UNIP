using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace Protótipo
{

    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        public class Program
        {

        }

        private void TxtSenha_TextChanged(object sender, TextChangedEventArgs e)
        {

        }

        private void TxtSenha_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.Key == Key.Enter)
            {
                PwbSenha.Focus();
            }
        }

        private void PwbSenha_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.Key == Key.Enter)
            {
                string senha = PwbSenha.Password;
                if (senha == "123456") // substitua essa linha com a validação real da senha
                {
                    MessageBox.Show("Senha verificada com sucesso!");
                }
                else
                {
                    MessageBox.Show("Senha incorreta, tente novamente!");
                }
            }
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            string senha = PwbSenha.Password;
            if (senha == "123456") // substitua essa linha com a validação real da senha
            {
                MessageBox.Show("Senha verificada com sucesso!");
            }
            else
            {
                MessageBox.Show("Senha incorreta, tente novamente!");
            }
        }

        private void TxtSenha_TextChanged1(object sender, TextChangedEventArgs e)
        {
            // Código do evento aqui
        }

        private void TxtSenha_KeyDown1(object sender, KeyEventArgs e)
        {
            if (e.Key == Key.Enter)
            {
                PwbSenha.Focus();
            }
        }

        private void PwbSenha_KeyDown1(object sender, KeyEventArgs e)
        {
            if (e.Key == Key.Enter)
            {
                string senha = PwbSenha1.Password;
                if (senha == "789456") // substitua essa linha com a validação real da senha
                {
                    MessageBox.Show("Senha verificada com sucesso!");
                }
                else
                {
                    MessageBox.Show("Senha incorreta, tente novamente!");
                }
            }
        }

        private void Button_Click1(object sender, RoutedEventArgs e)
        {
            string senha = PwbSenha.Password;
            if (senha == "789456") // substitua essa linha com a validação real da senha
            {
                MessageBox.Show("Senha verificada com sucesso!");
            }
            else
            {
                MessageBox.Show("Senha incorreta, tente novamente!");
            }
        }

        private void Button_Click_1(object sender, RoutedEventArgs e)
        {

        }

        private void Button_Click_2(object sender, RoutedEventArgs e)
        {

        }
    }
}
