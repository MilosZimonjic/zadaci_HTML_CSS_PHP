<?php
   $mydir = './';

   function is_dir_empty($dir)
   {
       if (!is_readable($dir)) return NULL;
       return (count(scandir($dir)) == 2);
   }

   function pisi($arrayFolders, $currentPath)
   {
       foreach ($arrayFolders as $folder)
       {
           if (is_dir($currentPath . $folder))
           {
               echo $currentPath . $folder . "<br>";
               if (!(is_dir_empty($currentPath . $folder . "/")))
               {
                   pisi(array_diff(scandir($currentPath . $folder . "/") , array(
                       '.',
                       '..'
                   )) , $currentPath . $folder . "/");
               }
           }
           else if (is_file($currentPath . $folder)) echo $currentPath . $folder . "<br>";
       }

   }

   function ListFoldersAndFiles($mydir)
   {
       pisi(array_diff(scandir($mydir) , array(
           '.',
           '..'
       )) , $mydir);
   }

   ListFoldersAndFiles($mydir);
   ?>
