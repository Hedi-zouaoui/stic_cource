 SET SERVEROUTPUT ON; 
 --ex2--
 ---------1))) -------
 declare 
   cursor empc is select * from emp order by nome  ;
   begin 
   for i  in empc loop 
   dbms_output.put_line(i.nome ) ; 
   end loop ; 
   
   
   
   
   end ; 
   /
   
-------2 )))) ----------

 declare 
   cursor empc is select matremp , count(codepr) as nb from participation group by matremp ; 
   begin for i in empc loop 
   dbms_output.put_line(i.nb ||'---' || i.matremp);
   end loop ; 
   end ; 
   / 


----- 3 )))) ----- 



----ex3----- 
create or replace affiche_emp(sol in number ) is employe emp%Rowtype 








