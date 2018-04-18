import java.awt.Color;
import java.awt.Container;
import java.awt.Font;

import javax.swing.BorderFactory;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextArea;
import javax.swing.JTextField;

public class Matricula {
		
	public static void main(String[] args) {
		JFrame frame = new JFrame();
		JPanel painelBranco = new JPanel();
		JPanel painelAmarelo = new JPanel();
		JLabel lblTitulo = new JLabel();
		JLabel lblNome = new JLabel();
		JLabel lblCurso = new JLabel();
		JLabel lblComentario = new JLabel();
		JLabel lblDisciplina = new JLabel();
		JTextField tfNome = new JTextField();
		JTextField tfCurso = new JTextField();
		JTextField tfDisciplina = new JTextField();
		JTextArea taComentario = new JTextArea();
		

		Container intermediario = frame.getContentPane();
		intermediario.setLayout(null);

		painelBranco.setLayout(null);
		painelBranco.setBounds(10, 10, 510, 340);
		painelBranco.setBackground(Color.WHITE);
		intermediario.add(painelBranco);
		
		//Titulo Painel Branco
		lblTitulo.setText("Matricula em Disciplina");
		lblTitulo.setForeground(Color.blue);
		lblTitulo.setFont(new Font("Arial",Font.BOLD|Font.ITALIC,18));
		lblTitulo.setBounds(150,10,240,30);
		painelBranco.add(lblTitulo);
		
		//Label Nome
		lblNome.setText("Nome: ");
		lblNome.setBounds(20,60,115,15);
		painelBranco.add(lblNome);
		
		//label Curso
		lblCurso.setText("Curso: ");
		lblCurso.setBounds(20, 90, 50, 15);
		painelBranco.add(lblCurso);
		
		//label Disciplina
		lblDisciplina.setText("Disciplina: ");
		lblDisciplina.setBounds(20, 120, 110, 15);
		painelBranco.add(lblDisciplina);
		
		//TestField Nome
		tfNome.setText("Digite seu nome!");
		tfNome.setForeground(Color.blue);
		tfNome.setBounds(100, 60, 400, 20);
		painelBranco.add(tfNome);
		
		//TestField Curso
		tfCurso.setText("Sistemas de Informação");
		tfCurso.setForeground(Color.blue);
		tfCurso.setBounds(100, 90, 400, 20);
		painelBranco.add(tfCurso);
		
		//TestField Disciplina
		tfDisciplina.setText("Linguagens e Tecnicas de Programação");
		tfDisciplina.setForeground(Color.blue);
		tfDisciplina.setBounds(100, 120, 400, 20);
		painelBranco.add(tfDisciplina);
		
		//painel Amarelo
		painelAmarelo.setLayout(null);
		painelAmarelo.setBounds(20, 180,470,130);
		painelAmarelo.setBackground(Color.yellow);
		painelAmarelo.setBorder(BorderFactory.createEtchedBorder());
		painelBranco.add(painelAmarelo);
		
		//label Comentario
		lblComentario.setText("Comentários: ");
		lblComentario.setBounds(20, 10, 100, 15);
		painelAmarelo.add(lblComentario);
		
		//text area comentario
		taComentario.setText("O Intuito da disciplina é ensinar ao aluno o " + 
				"paradigma orientado a objetos, utilizando a linguagem de programação " + 
				"orientada a objetos JAVA, também apresentar os componentes para " + 
				"construção de interface gráfica, o SWING.");
		taComentario.setForeground(Color.blue);
		taComentario.setLineWrap(true);
		taComentario.setWrapStyleWord(true);
		taComentario.setBounds(20,30,430,87);
		painelAmarelo.add(taComentario);
		
		frame.setTitle("Utilizando JTextComponent");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setSize(540, 400);
		frame.setVisible(true);
	}
	
}
