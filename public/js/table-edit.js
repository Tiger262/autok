var editable = {
    curret_cell: null,
    current_cell_value: null,

    // (PART B) EDIT CELL
    edit: cell => {
        // (B1) "SAVE" SELECTED CELL
        editable.current_cell = cell;
        editable.current_cell_value = cell.innerHTML;

        // (B2) SET EDITABLE
        cell.classList.add("edit");
        cell.contentEditable = true;
        cell.focus();

        // (B3) LISTEN TO END EDIT
        cell.onblur = editable.done;
        cell.onkeydown = e => {
            if (e.key == "Enter") { editable.done(); }
            if (e.key == "Escape") { editable.done(1); }
        };
    },

    // (PART C) EXIT EDIT CELL
    done: discard => {
        // (C1) REMOVE LISTENERS
        editable.ccell.onblur = "";
        editable.ccell.onkeydown = "";

        // (C2) STOP EDIT
        editable.ccell.classList.remove("edit");
        editable.ccell.contentEditable = false;

        // (C3) DISCARD CHANGES
        if (discard === 1) { editable.ccell.innerHTML = editable.current_cell_value; }

        // (C4) DO WHATEVER YOU WANT
        if (editable.ccell.innerHTML != editable.current_cell_value) {
            /* VALUE CHANGED */
            console.log(editable.ccell.innerHTML);
        }
    }
};

// (PART D) DOUBLE CLICK TO EDIT CELL
window.addEventListener("load", () => {
    for (let td of document.querySelectorAll(".editable td")) {
        td.addEventListener("dblclick", () => editable.edit(td));
    }
});