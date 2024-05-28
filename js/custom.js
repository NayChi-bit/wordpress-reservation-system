// スタッフスクロール
function staffScroll(event, targetId) {
    event.preventDefault();
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
        window.scrollTo({
            top: targetElement.offsetTop - 100,
            behavior: 'smooth'
        });
    } else {
        // 次回のページ読み込み時に使用するために、ターゲット ID をセッション ストレージに保存
        sessionStorage.setItem('scrollToId', targetId);
        // スタッフページに移動
        window.location.href = event.currentTarget.href;
    }
}

// ページの読み込み時に、セッション ストレージにターゲット ID が保存されているかどうかを確認
document.addEventListener('DOMContentLoaded', () => {
    const targetId = sessionStorage.getItem('scrollToId');
    if (targetId) {
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 100,
                behavior: 'smooth'
            });
        }
        sessionStorage.removeItem('scrollToId');
    }
});
