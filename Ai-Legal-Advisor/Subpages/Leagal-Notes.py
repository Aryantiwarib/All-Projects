import streamlit as st
import fitz  # PyMuPDF
from PIL import Image
import threading
import pygame
import time

def read_pdf(pdf_path):
    pdf_document = fitz.open(pdf_path)
    num_pages = pdf_document.page_count
    return pdf_document, num_pages

def render_page(pdf_document, page_number, max_width=600, max_height=700):
    page = pdf_document.load_page(page_number)
    pix = page.get_pixmap()
    img = Image.frombytes("RGB", [pix.width, pix.height], pix.samples)
    
    # Resize image to fit within the screen size
    img.thumbnail((max_width, max_height))
    return img

def play_sound_once():
    pygame.init()
    pygame.mixer.init()
    # audio_file_path = "C:\Users\Aryan\OneDrive\Desktop\Ai Tools(Projects)\page.mp3"
    audio_file_path = r"C:\Users\Aryan\OneDrive\Desktop\Ai Tools(Projects)\page.mp3"

    pygame.mixer.music.load(audio_file_path)
    pygame.mixer.music.play()  # Play the audio once
    while pygame.mixer.music.get_busy():  # Wait for the audio to finish playing
        time.sleep(0.1)

def main():
    st.title("PDF Reader")

    # Specify the path to your PDF file here
    # pdf_path = "C:\Users\Aryan\OneDrive\Desktop\Ai Tools(Projects)\docs1\Delhi police.pdf"
    pdf_path = r"C:\Users\Aryan\OneDrive\Desktop\Ai Tools(Projects)\docs1\Delhi police.pdf"


    pdf_document, num_pages = read_pdf(pdf_path)
    st.session_state.page_number = st.session_state.get('page_number', 0)

    # Display the PDF page
    st.image(render_page(pdf_document, st.session_state.page_number), use_column_width=True)

    # Custom CSS for button styling
    st.markdown("""
        <style>
        button {
            --border-radius: 15px;
            --border-width: 4px;
            appearance: none;
            position: relative;
            padding: 1em 2em;
            border: 0;
            background-color: #212121;
            font-family: "Roboto", Arial, "Segoe UI", sans-serif;
            font-size: 18px;
            font-weight: 500;
            color: #fff;
            z-index: 2;
        }
        button::after {
            --m-i: linear-gradient(#000, #000);
            --m-o: content-box, padding-box;
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            padding: var(--border-width);
            border-radius: var(--border-radius);
            background-image: conic-gradient(
                #488cfb,
                #29dbbc,
                #ddf505,
                #ff9f0e,
                #e440bb,
                #655adc,
                #488cfb
            );
            -webkit-mask-image: var(--m-i), var(--m-i);
            mask-image: var(--m-i), var(--m-i);
            -webkit-mask-origin: var(--m-o);
            mask-origin: var(--m-o);
            -webkit-mask-clip: var(--m-o);
            mask-composite: exclude;
            -webkit-mask-composite: destination-out;
            filter: hue-rotate(0);
            animation: rotate-hue linear 500ms infinite;
            animation-play-state: paused;
        }
        button:hover::after {
            animation-play-state: running;
        }
        @keyframes rotate-hue {
            to {
                filter: hue-rotate(1turn);
            }
        }
        button,
        button::after {
            box-sizing: border-box;
        }
        button:active {
            --border-width: 5px;
        }
        </style>
        """, unsafe_allow_html=True)

    # Navigation arrows with custom styles
    col1, col2, col3 = st.columns([1, 6, 1])

    with col1:
        if st.button("Prev◀️", key="prev", help="Go to previous page"):
            if st.session_state.page_number > 0:
                st.session_state.page_number -= 1
                threading.Thread(target=play_sound_once).start()  # Start playing sound once
                
    with col3:
        if st.button("Next▶️", key="next", help="Go to next page"):
            if st.session_state.page_number < num_pages - 1:
                st.session_state.page_number += 1
                threading.Thread(target=play_sound_once).start()  # Start playing sound once

    st.write(f"Page {st.session_state.page_number + 1} of {num_pages}")

if __name__ == "__main__":
    main()
