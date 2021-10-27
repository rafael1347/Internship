import java.util.Scanner;

public class CompoundIntrest {

   public static void main(String[] args) {
      Scanner input = new Scanner(System.in);

      double principal = 0;
      double rate = 0;
      double time = 0;

      double compoundInterest = 0;

      System.out.print("Enter the Principal amount : ");
      principal = input.nextDouble();

      System.out.print("Enter the Percentage Rate : ");
      rate = input.nextDouble();
      rate= rate/100;

      System.out.print("Enter the Years : ");
      time = input.nextDouble();

      compoundInterest = principal * Math.pow((1 + rate/1),(time));

      System.out.println("");
      System.out.println("After "+ time + " Compound Interest is : "
     + compoundInterest);
      

   }

}