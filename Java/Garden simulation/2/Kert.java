import javax.swing.*;
import java.util.ArrayList;
import java.util.List;

public class Kert {
    public static void main(String[] args) {
        List<Virag> viragok = new ArrayList<>();
        viragok.add(new Virag(5));
        viragok.add(new Virag(8));
        viragok.add(new Virag(6));

        View view = new View(viragok);
        Controller controller = new Controller(viragok, view);

        JFrame frame = new JFrame("Garden Simulation");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(400, 300);
        frame.getContentPane().add(view);
        frame.setVisible(true);

        controller.start();
    }
}
