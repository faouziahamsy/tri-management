     //Récuperer l'heure
     function getHour(i){
        let thead=document.getElementsByClassName("heure")
        let heure=thead[i].textContent.split(" - ")
        let heured=heure[0];
        let heuref=heure[1];
        return {heured,heuref};
    }

    function getJour(i){
        
        switch(i){
            case 0:return "Lundi" 
            case 1:return "Mardi"
            case 2:return "Mercredi"
            case 3:return "Jeudi"
            case 4:return "Vendredi"
            case 5:return "Samedi"

        }
    }

    //Création table
    function CreateTable(callback){
        let emploi=document.getElementById("emploi")
      
        for(let i=0;i<6;i++){
            //Création des lignes
            let line=document.createElement("tr")
         
            for(let j=0;j<5;j++){

                let celleule=document.createElement("td")
                let choix=i+""+j;
                if(j<5){
                    var {heured,heuref}=getHour(j)
                }

                if(i<6){
                    var jour=getJour(i)
                }
                switch(choix){

                    //Création les jours
                    case i+"0"  :celleule.textContent=jour; celleule.setAttribute("class","auto-style8");  break;
                   
                    //Fin des jours*/

                    //Affecter les heures aux cellules
                    case i+"1":celleule.setAttribute("data-bs-target","#formJour");celleule.setAttribute("data-bs-toggle","modal"); celleule.setAttribute("data-heuredebut",heured); celleule.setAttribute("class","cellule"); celleule.setAttribute("data-heurefin",heuref); celleule.setAttribute("data-jour",jour); break;
                    case i+"4":celleule.setAttribute("data-bs-target","#formJour");celleule.setAttribute("data-bs-toggle","modal"); celleule.setAttribute("data-heuredebut",heured); celleule.setAttribute("class","cellule"); celleule.setAttribute("data-heurefin",heuref); celleule.setAttribute("data-jour",jour); break;
                    case i+"2":celleule.setAttribute("data-bs-target","#formJour");celleule.setAttribute("data-bs-toggle","modal"); celleule.setAttribute("data-heuredebut",heured); celleule.setAttribute("class","cellule"); celleule.setAttribute("data-heurefin",heuref); celleule.setAttribute("data-jour",jour); break;
                    case i+"3":celleule.setAttribute("data-bs-target","#formJour");celleule.setAttribute("data-bs-toggle","modal"); celleule.setAttribute("data-heuredebut",heured); celleule.setAttribute("class","cellule"); celleule.setAttribute("data-heurefin",heuref); celleule.setAttribute("data-jour",jour); break;
                
                     
                           
                    
                }
               
                line.append(celleule)
            }
            emploi.append(line)

        }
        callback(emploi)

    }

    $('#formJour').on('show.bs.modal', function (event) {
        var a = $(event.relatedTarget) // link that triggered the modal
        var jour= a.data('jour') 
        var heuredebut= a.data('heuredebut') 
        var heurefin= a.data('heurefin')  // Extract info from data-* attributes
        var existed_res=a.data("prf")
        var existed_module=a.data("module")
        var existed_salle=a.data("salle")
        var existed_semainedebut=a.data("s_d")
        var existed_semainefin=a.data("s_fin")
        var modal = $(this)

        if(existed_module && existed_res && existed_salle && existed_semainedebut && existed_semainefin){
            
            modal.find(".modal-body #responsable option[value='"+existed_res+"']").attr("selected","selected"); 
            modal.find(".modal-body #module option[value='"+existed_module+"']").attr("selected","selected"); 
            modal.find(".modal-body #salle option[value='"+existed_salle+"']").attr("selected","selected"); 
            modal.find(".modal-body #semainedebut option[value='"+existed_semainedebut+"']").attr("selected","selected"); 
            modal.find(".modal-body #semainefin option[value='"+existed_semainefin+"']").attr("selected","selected");
        }

        modal.find('.modal-body #jour').val(jour);
        modal.find('.modal-body #heuredebut').val(heuredebut);
        modal.find('.modal-body #heurefin').val(heurefin);
    })
