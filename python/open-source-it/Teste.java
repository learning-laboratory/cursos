import java.util.Scanner;
    
public class Teste{
   
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int tentativas = 0;
        for(tentativas = 1; tentativas <= 3; tentativas++){
            System.out.println("Usuario: ");
            String usuario = ler.nextLine();
            System.out.println("Senha: ");
            String senha = ler.nextLine();
            if (usuario.equals("Exame") && senha.equals("FP2020")){
                System.out.println("Novos dados");
                System.out.println("Usuario: ");
                usuario = ler.nextLine();
                System.out.println("Senha: ");
                senha = ler.nextLine();
                System.out.println("Dados actualizados");
                break;
            }else{
                System.out.println("Dados incorrectos tente novamente.");
            }
        }

        if (tentativas == 3){
            System.out.println("Dados incorrectos o sistema ira encerrar.");
            System.exit(0);
        }

    }

}
