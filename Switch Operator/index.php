<?php
// write a php program to create a GPA system by using switch case:

    $num = 68;

    switch($num){
        case ($num>=80 && $num<=100):
            echo "You got A+";
            break;
        
             case ($num>=70 && $num<=79):
                echo "You got A";
                break;

               case ($num>=60 && $num<=69):
                  echo "You got A-";
                   break;

            case ($num>=50 && $num<=59):
                echo "You got B";
                break;

                case ($num>=40 && $num<=49):
                    echo "You got C+";
                    break;

                    case ($num>=33 && $num<=39):
                        echo "You got D+";
                        break;

                        case ($num<33 && $num<=0):
                            echo "You are fail !!!";
                            break;

                            default:
                            echo "Invalid number";






    }




