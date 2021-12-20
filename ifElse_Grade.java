
        package Week10;

        import java.util.Scanner;
        
        public class ifElse_Grade {
            public static void main(String[] args) {
                Scanner kb = new Scanner(System.in);
                System.out.println("Enter Score : ");
                int score = kb.nextInt();
        
                String result = "";
        
                if (score >= 100){
                System.out.println("คุณเก่งเกินไปนะ");
        
                } else if (score >= 80) {
                    result = "A";
                } else if (score >= 70) {
                    result = "B";
                } else if (score >= 60) {
                    result = "C";
                } else if (score >= 50) {
                    result = "D";
                } else {
                    result = "E";
                System.out.println("Grade = " + result);
        
                kb.close();
                }
        
            }
        }