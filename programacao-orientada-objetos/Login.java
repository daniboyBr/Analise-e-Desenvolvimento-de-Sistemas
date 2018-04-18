import java.awt.Color;
import java.awt.Container;
import java.awt.Font;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;

public class Login {

	public static void main(String[] args) {
		JFrame jFrameLogin = new JFrame();
		JLabel lblTitulo = new JLabel();
		JLabel lblLogin = new JLabel();
		JLabel lblPassword = new JLabel();
		JTextField jTFLogin = new JTextField();
		JPasswordField jPFPassword = new JPasswordField();
		JPanel jPanelButoes = new JPanel();
		JButton btnOk = new JButton("ok");
		JButton btnCancelar = new JButton("Cancelar");
		
		Container intermediario = jFrameLogin.getContentPane();
		intermediario.setLayout(null);
		
		lblTitulo.setText("LOGIN");
		lblTitulo.setBounds(180,20,180,15);
		lblTitulo.setFont(new Font("Arial", Font.BOLD,12));
		lblTitulo.setForeground(Color.red);
		intermediario.add(lblTitulo);
		
		lblLogin.setText("Insira seu Login: ");
		lblLogin.setBounds(30,50,125,20);
		intermediario.add(lblLogin);
		
		lblPassword.setText("Insira sua Senha: ");
		lblPassword.setBounds(30, 90, 130, 15);
		intermediario.add(lblPassword);
		
		jTFLogin.setBounds(160, 52, 210, 20);
		intermediario.add(jTFLogin);
		
		jPFPassword.setBounds(160, 88, 210, 20);
		intermediario.add(jPFPassword);
		
		btnOk.setBounds(100, 20, 60, 23);
		jPanelButoes.add(btnOk);
		
		btnCancelar.setBounds(170, 20, 100, 23);
		btnCancelar.setToolTipText("Sair do Programa");
		jPanelButoes.add(btnCancelar);
		
		jPanelButoes.setBounds(30, 120, 340, 60);
		jPanelButoes.setLayout(null);
		jPanelButoes.setBackground(Color.blue);
		intermediario.add(jPanelButoes);
		
		jFrameLogin.setTitle("Questao 02");
		jFrameLogin.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		jFrameLogin.setSize(400, 250);
		//jFrameLogin.pack();
		jFrameLogin.setVisible(true);

	}

}
