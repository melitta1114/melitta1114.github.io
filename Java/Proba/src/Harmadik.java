
public class Harmadik {

    public static void main(String[] args){
        for(String arg : args){
            for( int i=0; i < arg.length(); i++){
                char argumentum = arg.charAt(i);
                char atalakitott;

                if(Character.isLowerCase(argumentum)){
                    atalakitott=Character.toUpperCase(argumentum);
                }
                else if(Character.isUpperCase(argumentum)){
                    atalakitott=Character.toLowerCase(argumentum);
                }
                else{
                    atalakitott=argumentum;
                }
                System.out.println(atalakitott);
            }
        }
    }
}
