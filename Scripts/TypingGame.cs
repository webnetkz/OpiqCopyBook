using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using System;

public class TypingGame : MonoBehaviour
{
    public GameObject[] letterPrefabs;
    public string text = "Hello World!";
    public float speed = 0.1f;

    private List<GameObject> letters = new List<GameObject>();
    private int currentLetterIndex = 0;
    private Camera mainCamera;
    private float smoothTime = 0.3f;
    private Vector3 velocity = Vector3.zero;


    // Start is called before the first frame update
    void Start()
    {
        mainCamera = Camera.main;
        GenerateLetters();
    }


    // Update is called once per frame
    void Update()
    {
        MoveCamera();
        if (Input.anyKeyDown)
        {
            if (Input.GetKeyDown(text[currentLetterIndex].ToString()))
            {
                letters[currentLetterIndex].GetComponent<Rigidbody>().useGravity = true;
                letters[currentLetterIndex].GetComponent<Rigidbody>().AddForce(-transform.forward * 60f, ForceMode.Impulse);
                
                Destroy(letters[currentLetterIndex], 5f); // Уничтожить через 2 секунды
                currentLetterIndex++;

                if (currentLetterIndex == text.Length)
                {
                    Debug.Log("You win!");
                    enabled = false;
                }
            } else {
                Invoke("ShowBloor", 1f);
            }
        }
        MoveCamera();
    }

    private void ShowBloor()
    {

    }


    void GenerateLetters()
    {
        float x = -text.Length / 2f;

        for (int i = 0; i < text.Length; i++)
        {
            char c = text[i];
            // Добавляет отсуп пробела
            if (c == ' ')
            {
                x += 1.0f;
                continue;
            }
            if (!Char.IsLower(c))
            {
                Debug.LogError("Invalid character in text: " + c);
                continue;
            }


            int index = c - 'a';
            if (index < 0 || index >= letterPrefabs.Length)
            {
                Debug.LogError("Invalid index for character " + c);
                continue;
            }

            if(i != 0) {
                x -= 0.5f;
            }

            GameObject letterPrefab = letterPrefabs[index];
            GameObject letter = null;
            letter = Instantiate(letterPrefab, new Vector3(x + (i*2), 7f, 0f), Quaternion.identity);

            
            letter.transform.Rotate(0f, 180f, 0f); // Поворачивает буквы, лицом к камере
            letters.Add(letter);
        }
        text = text.Replace(" ", ""); // удаляем пробелы из строки
    }



    void MoveCamera()
    {
        Vector3 targetPosition = Vector3.zero;
        int count = 0;

        for (int i = 0; i < currentLetterIndex; i++)
        {
            if (letters[i] != null)
            {
                targetPosition += letters[i].transform.position;
                count++;
            }
        }

        if (count > 0)
        {
            targetPosition /= count;

            Vector3 cameraPosition = mainCamera.transform.position;
            cameraPosition = Vector3.SmoothDamp(cameraPosition, new Vector3(targetPosition.x, 10.4f, -22.7f), ref velocity, smoothTime);
            mainCamera.transform.position = cameraPosition;
        }
    }

}
