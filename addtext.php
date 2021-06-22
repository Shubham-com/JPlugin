<?php
defined('_JEXEC') or die('Access Deny');

class plgSystemplg_system_addtext extends JPlugin 
{
public function onBeforeCompileHead()
    {
     global $result;
    
     $result =$this-> params->get('textfield'); 
     $document = JFactory::getDocument();
     $document->addScriptDeclaration(' window.addEventListener("DOMContentLoaded", function()
        {
    
          const num = document.querySelectorAll("h1,h2").length; 
          for(let i=0;i<num;i++)
             {
              const head=document.querySelectorAll("h1,h2")[i].innerHTML = "'. $result.'" + document.querySelectorAll("h1,h2")[i].innerHTML ;
             }

        }
      );');
       return true;
    
    } 
}

