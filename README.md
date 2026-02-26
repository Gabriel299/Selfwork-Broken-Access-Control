# Selfwork Broken Access Control

In questa soluzione sono state mitigate le vulnerabilità come visto nella video-lezione nello specifico:
1. l'utente non può accedere agli altri profili inserendo l'id nell'URL
2. l'utente non può accedere alla dashboard senza avere i relativi permessi inserendo la route nell'URL
3. solo l'autore dell'articolo e l'admin possono modificare e cancellare un articolo

# Selfwork Cryptographic Failures
In questa seconda soluzione sono state mitigate le vulnerabilità come visto nella video-lezione nello specifico:
1. modificato l'algoritmo di hashing per l'upload dell'immagine per l'avatar
2. implementazione delle tecniche di salting e peppering

# Selfwork Injection
In questa terza soluzione sono state mitigate le vulnerabilità come visto nella video-lezione nello specifico:
1. modifica della funzione di ricerca sostituendo un metodo raw con un metodo che permette di filtrare le query
2. creazione di un nuovo utente sul server che ha accesso solo al database utilizzato nel blog e che ha solo i permessi minimi necessari

# Selfwork Insecure Design
In questa quarta soluzione sono state mitigate le vulnerabilità come visto nella video-lezione nello specifico:
1. creare e registrare un middleware che impone un rate limit ai commenti che possono essere inseriti in un minuto da uno specifico IP, bloccando la possibilità di inserirne altri superata la soglia
2. implementare il middleware nella route del inserimento dei commenti

# Selfwork Security Misconfiguration
In questa quinta soluzione sono state mitigate le vulnerabilità come visto nella video-lezione nello specifico:
1. blocco dell’upload di estensioni pericolose decidendo quali accettare
2. modifica della cartella di salvataggio del file

# Selfwork Vulnerable and Outdated Components
In questa sesta soluzione sono state mitigate le vulnerabilità come visto nella video-lezione nello specifico:
1. ricerca e mitigazione di eventuali vulnerabilità php utlilizzando i comandi:
    * <code>composer audit</code>
    * <code>composer update</code>
2. ricerca e mitigazione di eventuali vulnerabilità front-end utlilizzando i comandi:
    * <code>npm audit</code>
    * <code>npm audit fix</code>
3. test per verificare l'integrità del progetto dopo gli aggiornamenti dei pacchetti

# Selfwork Identification and Authentication Failures
In questa settima soluzione sono state mitigate le vulnerabilità come visto nella video-lezione nello specifico:
1. implementazione eliminazione della sessione alla chiusura del browser
2. miglioramento regole per la validazione della password