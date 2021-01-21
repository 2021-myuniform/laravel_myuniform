const SWL_tops = document.getElementById('selectWearList_tops');
const SWL_pants = document.getElementById('selectWearList_pants');
const SWL_shoes = document.getElementById('selectWearList_shoes');

// function clickHeaderTops(){
    document.getElementById('headerList_tops').onclick = function(){
        document.getElementById('selectWearList_tops').classList.toggle("displayBlock")
        if(SWL_pants.classList.contains('displayBlock')){
            document.getElementById('selectWearList_pants').classList.remove("displayBlock")
        }
        if(SWL_shoes.classList.contains('displayBlock')){
            document.getElementById('selectWearList_shoes').classList.remove("displayBlock")
        }
    };
// }

// function clickHeaderPants(){
    document.getElementById('headerList_pants').onclick = function(){
        document.getElementById('selectWearList_pants').classList.toggle("displayBlock")
        if(SWL_tops.classList.contains('displayBlock')){
            document.getElementById('selectWearList_tops').classList.remove("displayBlock")
        }
        if(SWL_shoes.classList.contains('displayBlock')){
            document.getElementById('selectWearList_shoes').classList.remove("displayBlock")
        }
    };
// }

// function clickHeaderShoes(){
    document.getElementById('headerList_shoes').onclick = function(){
        document.getElementById('selectWearList_shoes').classList.toggle("displayBlock")
        if(SWL_tops.classList.contains('displayBlock')){
            document.getElementById('selectWearList_tops').classList.remove("displayBlock")
        }
        if(SWL_pants.classList.contains('displayBlock')){
            document.getElementById('selectWearList_pants').classList.remove("displayBlock")
        }
    };
// }