/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
	alert('Keyboard key is not allowed.');
    }
    return false;
};

document.onmousedown = function(e) {
    if (e.button === 2) {
	alert("Right click disabled.");
	return false;
    }
};