import java.awt.Container;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;
import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JSeparator;
import javax.swing.border.BevelBorder;
import javax.swing.border.SoftBevelBorder;

/**
 *
 * @author daniboy
 */
public class FrmCombo {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        JFrame form = new JFrame();
        JButton limpar = new JButton();
        JPanel jPanelEscolha = new JPanel();
        JSeparator jSeparator1 = new JSeparator();
        JLabel lblEscolhaCarro = new JLabel();
        JLabel lblIndexCarro = new JLabel();
        JLabel lblVoceGanhou = new JLabel();
        JLabel lblValorEscolhodo = new JLabel();
        JLabel carroGanho = new JLabel();
        
        form.setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        form.setTitle("Exemplo evento JComboBox");
        form.setSize(600, 600);
        Container intermediario = form.getContentPane();
        intermediario.setLayout(null);
        

        jPanelEscolha.setBorder(new SoftBevelBorder(BevelBorder.RAISED));
        jPanelEscolha.setLayout(null);

        lblEscolhaCarro.setText("Escolha um Carro: ");
        jPanelEscolha.add(lblEscolhaCarro);
        lblEscolhaCarro.setBounds(50, 40, 140, 20);

        String[] dados = {"Fusca","Palio","Civic"};
        JComboBox combo = new JComboBox(dados);
        combo.addItemListener( 
            new ItemListener(){
                @Override
                public void itemStateChanged(ItemEvent event)
                {
                    if (event.getStateChange() == ItemEvent.SELECTED){
                        carroGanho.setText(""+combo.getSelectedItem());
                        lblIndexCarro.setText(""+combo.getSelectedIndex());
                    }
                }
            }
        ); 
        jPanelEscolha.add(combo);
        combo.setBounds(250, 40, 200, 24);

        intermediario.add(jPanelEscolha);
        jPanelEscolha.setBounds(20, 30, 490, 110);

        jSeparator1.setOrientation(javax.swing.SwingConstants.VERTICAL);
        intermediario.add(jSeparator1);
        jSeparator1.setBounds(380, 160, 2, 120);

        limpar.setText("Limpar");
        limpar.addActionListener(new ActionListener() {			
            @Override
            public void actionPerformed(ActionEvent arg0) {
                carroGanho.setText("");
                lblIndexCarro.setText("");
            }
        });
        intermediario.add(limpar);
        limpar.setBounds(410, 200, 82, 25);

        lblVoceGanhou.setText("Você acaba de ganhar um :");
        intermediario.add(lblVoceGanhou);
        lblVoceGanhou.setBounds(30, 190, 200, 15);
        
        carroGanho.setText("");
        intermediario.add(carroGanho);
        carroGanho.setBounds(250, 190, 200, 15);

        lblValorEscolhodo.setText("Index do valor escolhido:");
        intermediario.add(lblValorEscolhodo);
        lblValorEscolhodo.setBounds(30, 220, 190, 15);
        
        lblIndexCarro.setText("");        
        intermediario.add(lblIndexCarro);
        lblIndexCarro.setBounds(250, 220, 110, 15);


        form.setBounds(0, 0, 528, 329);
        form.setVisible(true);
    }
    
}
