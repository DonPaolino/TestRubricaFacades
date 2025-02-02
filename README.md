## ContactController.php
    Ho aggiornato ContactController.php per utilizzare solo Facades (DB::table()), mantenendo la logica per restituire i dati in JSON. 
    Ora il controller legge i dati direttamente dal database senza dipendere da un repository.

## ContactRepository.php
    Ho aggiornato il repository per utilizzare Facades (DB::table()) al posto della Dependency Injection. 
    Ora il repository può essere utilizzato direttamente per ottenere i dati senza bisogno di passare un'istanza del database.

## resources/views/contacts/index.blade.php 
    Creazione della view per la lista dei contatti

## resources/views/contacts/show.blade.php
    Creazione della view per il dettaglio di un contatto


