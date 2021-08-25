import React, { useEffect, useRef } from "react";

export default function InputForFloatingLabel({
    type = "text",
    id,
    name,
    value,
    placeholder,
    className,
    autoComplete,
    required,
    isFocused,
    handleChange,
    min,
    max,
    step
}) {
    const input = useRef();

    useEffect(() => {
        if (isFocused) {
            input.current.focus();
        }
    }, []);

    return (
        <input
            type={type}
            id={id}
            name={name}
            value={value}
            className={
                `peer block w-full ` +
                (className ? className : '')
            }
            ref={input}
            autoComplete={autoComplete}
            placeholder={placeholder}
            required={required}
            onChange={(e) => handleChange(e)}
            min={min}
            max={max}
            step={step}
        />
    );
}

