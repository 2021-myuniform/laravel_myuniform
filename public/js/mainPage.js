const SWL_tops = document.getElementById('selectWearList_tops');
const SWL_pants = document.getElementById('selectWearList_pants');
const SWL_shoes = document.getElementById('selectWearList_shoes');
const SWL_caps = document.getElementById('selectWearList_caps');
const SWL_socks = document.getElementById('selectWearList_socks');

// function clickHeaderTops(){
    document.getElementById('headerList_tops').onclick = function(){
        document.getElementById('selectWearList_tops').classList.toggle("displayBlock")
        if(SWL_pants.classList.contains('displayBlock')){
            document.getElementById('selectWearList_pants').classList.remove("displayBlock")
        }
        if(SWL_shoes.classList.contains('displayBlock')){
            document.getElementById('selectWearList_shoes').classList.remove("displayBlock")
        }
        if(SWL_caps.classList.contains('displayBlock')){
            document.getElementById('selectWearList_caps').classList.remove("displayBlock")
        }
        if(SWL_socks.classList.contains('displayBlock')){
            document.getElementById('selectWearList_socks').classList.remove("displayBlock")
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
        if(SWL_caps.classList.contains('displayBlock')){
            document.getElementById('selectWearList_caps').classList.remove("displayBlock")
        }
        if(SWL_socks.classList.contains('displayBlock')){
            document.getElementById('selectWearList_socks').classList.remove("displayBlock")
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
        if(SWL_caps.classList.contains('displayBlock')){
            document.getElementById('selectWearList_caps').classList.remove("displayBlock")
        }
        if(SWL_socks.classList.contains('displayBlock')){
            document.getElementById('selectWearList_socks').classList.remove("displayBlock")
        }
    };

// function clickHeaderCaps(){
    document.getElementById('headerList_caps').onclick = function(){
        document.getElementById('selectWearList_caps').classList.toggle("displayBlock")
        if(SWL_tops.classList.contains('displayBlock')){
            document.getElementById('selectWearList_tops').classList.remove("displayBlock")
        }
        if(SWL_pants.classList.contains('displayBlock')){
            document.getElementById('selectWearList_pants').classList.remove("displayBlock")
        }
        if(SWL_shoes.classList.contains('displayBlock')){
            document.getElementById('selectWearList_shoes').classList.remove("displayBlock")
        }
        if(SWL_socks.classList.contains('displayBlock')){
            document.getElementById('selectWearList_socks').classList.remove("displayBlock")
        }
    };

// function clickHeaderSocks(){
    document.getElementById('headerList_socks').onclick = function(){
        document.getElementById('selectWearList_socks').classList.toggle("displayBlock")
        if(SWL_tops.classList.contains('displayBlock')){
            document.getElementById('selectWearList_tops').classList.remove("displayBlock")
        }
        if(SWL_pants.classList.contains('displayBlock')){
            document.getElementById('selectWearList_pants').classList.remove("displayBlock")
        }
        if(SWL_shoes.classList.contains('displayBlock')){
            document.getElementById('selectWearList_shoes').classList.remove("displayBlock")
        }
        if(SWL_caps.classList.contains('displayBlock')){
            document.getElementById('selectWearList_caps').classList.remove("displayBlock")
        }
    };
// }