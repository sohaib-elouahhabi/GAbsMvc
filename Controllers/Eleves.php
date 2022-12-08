<?php
class Eleves extends Controller
{

    public function __Construct()
    {
        parent::__Construct('eleve');
    }
    public function index()
    {
        parent::view("index",eleve::All());
    }
    public function show($id)
    {
        parent::view("show",eleve::find($id));
    }
    public function destroy($id)
    {
        $P=eleve::find($id);
        $P->delete();
        $this->Redirect("../../Eleves");
    }
    public function store($request)
    {
        $P=new eleve();
        $P->cne=$request->cne;
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->groupe=$request->groupe;
        $P->save();
        $this->Redirect("../Eleves");
    }
    public function edit($id)
    {
        parent::view("form",eleve::find($id));
    }
    public function update($id,$request)
    {
        $P=eleve::find($id);
        $P->cne=$request->cne;  
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->groupe=$request->groupe;
        $P->save();
        $this->Redirect("../../Eleves");
    }
    public function create()
    {
        parent::view("form");
    }   
}
?>