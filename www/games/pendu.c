#include <stdio.h>
#include <string.h>
#include <ctype.h>

#define MAX_WRONG_GUESSES 6 // Le nombre maximum de mauvaises réponses autorisées
#define WORDS_COUNT 10 // Le nombre de mots dans la liste

// La liste des mots à deviner
const char *WORDS[WORDS_COUNT] = {
    "ordinateur",
    "programme",
    "algorithme",
    "variable",
    "condition",
    "boucle",
    "tableau",
    "fonction",
    "pointeur",
    "compilation"
};

int main()
{
    char word_to_guess[50];
    char guessed_letters[26];
    int wrong_guesses = 0;

    // Sélectionne un mot aléatoire dans la liste
    strcpy(word_to_guess, WORDS[rand() % WORDS_COUNT]);

    // Initialise le tableau des lettres trouvées avec des espaces
    char found_letters[strlen(word_to_guess)];
    memset(found_letters, ' ', sizeof(found_letters));

    printf("Jeu du pendu\n\n");

    // Boucle principale du jeu
    while (wrong_guesses < MAX_WRONG_GUESSES && strchr(found_letters, ' ') != NULL) {
        printf("\nMot à deviner : ");
        for (int i = 0; i < strlen(word_to_guess); i++) {
            if (found_letters[i] == ' ') {
                printf("_ ");
            } else {
                printf("%c ", found_letters[i]);
            }
        }

        printf("\nLettres déjà essayées : ");
        for (int i = 0; i < strlen(guessed_letters); i++) {
            printf("%c ", guessed_letters[i]);
        }

        printf("\nEntrez une lettre : ");
        char input[10];
        scanf("%s", input);

        // Vérifie si l'entrée est une lettre
        if (!isalpha(input[0])) {
            printf("Erreur : veuillez entrer une lettre\n");
            continue;
        }

        // Vérifie si la lettre a déjà été essayée
        if (strchr(guessed_letters, input[0]) != NULL) {
            printf("Vous avez déjà essayé cette lettre\n");
            continue;
        }

        guessed_letters[strlen(guessed_letters)] = input[0];

        // Vérifie si la lettre est présente dans le mot à deviner
        if (strchr(word_to_guess, input[0]) != NULL) {
            for (int i = 0; i < strlen(word_to_guess); i++) {
                if (word_to_guess[i] == input[0]) {
                    found_letters[i] = input[0];
                }
            }
        } else {
            wrong_guesses++;
            printf("La lettre n'est pas dans le mot\n");
        }
    }

    // Affiche le résultat de la partie
    if (wrong_guesses == MAX_WRONG_GUESSES) {
        printf("\nPerdu ! Le mot était %s\n", word_to_guess);
    } else {
        printf("\nGagné ! Le mot était %s\n", word_to_guess);
    }

    return 0;
}
